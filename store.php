<?php

// Database connection
$servername = "localhost";  // Change if needed
$username = "root";         // Change to your database username
$password = "";             // Change to your database password
$database = "sam";     // Change to your database name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Database Connection Failed"]));
}

// Check required parameters
if (!isset($_GET['case_number']) || !isset($_GET['case_year']) || !isset($_GET['complex_id'])) {
    echo json_encode(["error" => "Missing required parameters"]);
    exit();
}

$case_number = $_GET['case_number'];
$case_year = $_GET['case_year'];
$complex_id = $_GET['complex_id'];

if (empty($case_number) || empty($case_year) || empty($complex_id)) {
    echo json_encode(["error" => "case_number, case_year, or complex_id is empty"]);
    exit();
}

// First API Call - Get CNR Number
$api_url_1 = 'https://apis.akshit.net/eciapi/17/district-court/search/filing-number';
$payload_1 = json_encode([
    "filingNumber" => $case_number,
    "filingYear" => $case_year,
    "complexId" => $complex_id
]);

$ch1 = curl_init();
curl_setopt_array($ch1, [
    CURLOPT_URL => $api_url_1,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $payload_1,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Authorization: ECIAPI-JZ23Fd9Q3Zt17ixkRhK7eFkAo7WEI6hy'
    ]
]);

$response1 = curl_exec($ch1);
curl_close($ch1);

$data1 = json_decode($response1, true);

// Check if CNR number is found
if (!empty($data1[0]['cases'][0]['cnr'])) {
    $cnr = $data1[0]['cases'][0]['cnr'];

    // Second API Call - Get Case Details
    $api_url_2 = 'https://apis.akshit.net/eciapi/17/district-court/case';
    $payload_2 = json_encode(["cnr" => $cnr]);

    $ch2 = curl_init();
    curl_setopt_array($ch2, [
        CURLOPT_URL => $api_url_2,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $payload_2,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: ECIAPI-JZ23Fd9Q3Zt17ixkRhK7eFkAo7WEI6hy'
        ]
    ]);

    $response2 = curl_exec($ch2);
    curl_close($ch2);

    $data2 = json_decode($response2, true);

    // Check if valid response is received
    if (!empty($data2)) {
        $case_title = $data2['title'] ?? "";
        $acts = $data2['actsAndSections']['acts'] ?? "";
        $sections = $data2['actsAndSections']['sections'] ?? "";
        $filing_number = $data2['details']['filingNumber'] ?? "";
        $filing_date = $data2['details']['filingDate'] ?? "";
        $first_hearing_date = $data2['status']['firstHearingDate'] ?? "";
        $next_hearing_date = $data2['status']['nextHearingDate'] ?? "";
        $judge = $data2['history'][0]['judge'] ?? "";
        $petitioners = implode(", ", $data2['parties']['petitioners'] ?? []);
        $respondents = implode(", ", $data2['parties']['respondents'] ?? []);
        $orders = isset($data2['orders'][0]) ? json_encode($data2['orders']) : "";

        // Convert date format
        $filing_date = date('Y-m-d H:i:s', strtotime($filing_date));
        $first_hearing_date = date('Y-m-d H:i:s', strtotime($first_hearing_date));
        $next_hearing_date = date('Y-m-d H:i:s', strtotime($next_hearing_date));

        // Insert into MySQL database
        $stmt = $conn->prepare("INSERT INTO court_cases 
            (cnr, case_title, acts, sections, filing_number, filing_date, first_hearing_date, next_hearing_date, judge, petitioners, respondents, orders) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE case_title = VALUES(case_title), acts = VALUES(acts), sections = VALUES(sections), filing_number = VALUES(filing_number), filing_date = VALUES(filing_date), first_hearing_date = VALUES(first_hearing_date), next_hearing_date = VALUES(next_hearing_date), judge = VALUES(judge), petitioners = VALUES(petitioners), respondents = VALUES(respondents), orders = VALUES(orders)");

        $stmt->bind_param("ssssssssssss", $cnr, $case_title, $acts, $sections, $filing_number, $filing_date, $first_hearing_date, $next_hearing_date, $judge, $petitioners, $respondents, $orders);

        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "Data stored successfully"]);
        } else {
            echo json_encode(["error" => "Failed to insert data"]);
        }

        $stmt->close();
    } else {
        echo json_encode(["error" => "Invalid API response"]);
    }
} else {
    echo json_encode(["error" => "CNR number not found", "response" => $data1]);
}

$conn->close();

?>

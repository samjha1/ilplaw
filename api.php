<?php
if (isset($_GET['case_no']) && isset($_GET['case_year'])) {
    $case_no = $_GET['case_no'];
    $case_year = $_GET['case_year'];

    if (empty($case_no) || empty($case_year)) {
        echo json_encode(["error" => "case_no or case_year is empty"]);
        exit();
    }

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://apis.akshit.net/eciapi/17/supreme-court/case',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode([
            "diaryNumber" => $case_no,
            "year" => $case_year
        ]),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: ECIAPI-JZ23Fd9Q3Zt17ixkRhK7eFkAo7WEI6hy'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    // Send JSON response back to frontend
    header('Content-Type: application/json');
    echo $response;
    exit();
} else {
    echo json_encode(["error" => "Missing case_no or case_year"]);
}
?>

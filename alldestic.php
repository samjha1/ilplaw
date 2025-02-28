<?php


    if (isset($_GET['case_number']) && isset($_GET['case_year']) && isset($_GET['complex_id'])) {
      $case_number = $_GET['case_number'];
      $case_year = $_GET['case_year'];
      $complex_id = $_GET['complex_id'];
  
      if (empty($case_number) || empty($case_year) || empty($complex_id)) {
          echo json_encode(["error" => "case_number or case_year is empty"]);
          exit();
      }
  


$curl = curl_init();

// First API Call
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://apis.akshit.net/eciapi/17/district-court/search/filing-number',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode([
        "filingNumber" => $case_number,
        "filingYear" => $case_year,
        "complexId" => $complex_id
    ]),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: ECIAPI-JZ23Fd9Q3Zt17ixkRhK7eFkAo7WEI6hy'
    ),
));

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);
// echo $data[0]['cases'][0]['cnr'];
// Check if the response contains a 'cases' array and extract the 'cnr' number
if (!empty($data[0]['cases'][0]['cnr'])) {
    $cnr = $data[0]['cases'][0]['cnr'];

    // Second API Call with CNR number
    $curl2 = curl_init();
    curl_setopt_array($curl2, array(
        CURLOPT_URL => 'https://apis.akshit.net/eciapi/17/district-court/case',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode([
            "cnr" => $cnr
        ]),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: ECIAPI-JZ23Fd9Q3Zt17ixkRhK7eFkAo7WEI6hy'
        ),
    ));

    $cnr_response = curl_exec($curl2);
    curl_close($curl2);

    // Send final response back to frontend
    header('Content-Type: application/json');
    echo $cnr_response;
} else {
    // If CNR number is not found, return the original response
    header('Content-Type: application/json');
    echo json_encode(["error" => "CNR number not found", "response" => $data]);
}
}
else {
    echo json_encode(["error" => "case_number or case_year or complex_id is empty"]);
    exit();
}

?>


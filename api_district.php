<?php
if (isset($_GET['cnr'])) {
  $cnr = $_GET['cnr'];
  

  if (empty($cnr) ) {
      echo json_encode(["error" => "cnr  is empty"]);
      exit();
  }
$curl = curl_init();

curl_setopt_array($curl, array(
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

$response = curl_exec($curl);
curl_close($curl);

// Send JSON response back to frontend
header('Content-Type: application/json');
echo $response;
 exit();
} else {
 echo json_encode(["error" => "Missing cnr or case_year"]);
}
?>
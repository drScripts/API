<?php 
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,'https://api.unicheck.com?grant_type=client_credentials&client_id=e569b6efd4d1e0ebde00&client_secret=e569b6efd4d1e0ebde00');
curl_setopt($curl,CURLOPT_HTTPHEADER,[
    'Content-Type: application/x-www-form-urlencoded'
]);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($curl);
curl_close($curl);


echo "<pre>";
print_r($result);
echo "</pre>";
?>
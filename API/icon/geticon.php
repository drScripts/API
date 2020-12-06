<?php 
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,"https://api.iconscout.com/v3/search");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
 
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Client-ID: 81107655603200',
));
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result,true);
// print_r($result['icons']);
    




echo "<pre>";
print_r($result);
echo "</pre>";
     

 


 
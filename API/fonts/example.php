<?php  
// google api key
$google_api_key = "AIzaSyCXe2aB65Q4b6wRbe7ZwXlFcBBU97hMML8";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/webfonts/v1/webfonts?key=" . $google_api_key);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json"
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
$fonts_list = json_decode(curl_exec($ch), true);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if($http_code != 200) 
    exit('Error : Failed to get Google Fonts list');

// echo out list of fonts


// $fonts_list = $fonts_list['items'];
// foreach($fonts_list as $font){
//     $category = $font['category'];
//     echo $category . "<br>";
// }



echo "<pre>";
print_r($fonts_list);
echo "</pre>";


?>
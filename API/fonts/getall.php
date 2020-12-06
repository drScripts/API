<?php  
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
// google api key
$google_api_key = "AIzaSyCXe2aB65Q4b6wRbe7ZwXlFcBBU97hMML8";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/webfonts/v1/webfonts?key=" . $google_api_key);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json"
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,true); 
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true); 
$fonts_list = json_decode(curl_exec($ch), true);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if($http_code != 200) 
    exit('Error : Failed to get Google Fonts list');

// echo out list of fonts


// foreach($fontlis as $font);
$fonts_list = $fonts_list['items'];
echo "<option value='kosong'>--- Select Font Style ---</option>";
foreach($fonts_list as $font){
    // echo "<pre>";
    // print_r($font); 
    // echo "</pre>";

    // display,handwriting 
    
    $category = $font['category'];
    if($category == 'display' || $category == 'handwriting'){
        $category = "cursive";
    }
    // echo $category . "<br>";
    $font = $font['family'];

     $word_count = str_word_count($font); 
     if($word_count != 1){
        $link = strtr($font," ","+");
        $link = $link ."/".$category;
        echo "<option value='$link'>$font</option>";
        echo "<br>";
    }else{
        $link = $font . "/" . $category;
        echo "<option value='$link'>$font</option>";
    }

}

?>
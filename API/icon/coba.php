<?php 
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,"https://api.iconscout.com/v3/search?query=%2A&oauth_client_id=81107655603200&product_type=item&asset=icon&sort=relevant&per_page=60&page=2");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
 
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Client-ID: 81107655603200',
));
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result,true);
// print_r($result['icons']);
    

$result = $result['response']['items']['data'];
 

$uuid = $result[0]['uuid']; 

 
 

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="cobadownload.php" method="post">
            <input type="text" name="uuid" value="<?= $uuid ?>">
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>

</html>
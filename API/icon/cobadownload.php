<?php 
$uuid = $_POST['uuid'];
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,"https://api.iconscout.com/v3/items/$uuid/api-download?format=svg");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl, CURLOPT_POST, 1);
 $head = array(
     'Client-Secret: C8K1Qp9gWkAmaCqAQwKqmDjg8olnTLDS',
     'Client-ID: 81107655603200'
 );
    
curl_setopt($curl, CURLOPT_HTTPHEADER,$head);

$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result,true);
echo "<pre>";
print_r($result);
echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <input type="text" value="Hello World" id="myInput">

        <div class="tooltip">
            <p onclick="myFunction()" onmouseout="outFunc()">
                <span class="tooltiptext" id="myTooltip">Salin isi teks</span>
                Salin
            </p>
        </div>

        <script>
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            document.execCommand("copy");

            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Tersalin " + copyText.value;
        }

        function outFunc() {
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Salin isi teks";
        }
        </script>

    </body>

</html>
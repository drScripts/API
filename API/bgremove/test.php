<?php 
require_once "vendor/autoload.php";
$link = 'img/Dragon.jpg';

$links = base64_encode ($link);      
 
$client = new GuzzleHttp\Client();
$res = $client->post('https://api.remove.bg/v1.0/removebg', [
    'multipart' => [
        [
            'name'     => 'image_file',
            'contents' => fopen('img/300846.jpg', 'r')
        ],
        [
            'name'     => 'size',
            'contents' => 'auto'
        ]
    ],
    'headers' => [
        'X-Api-Key' => 'C1Qg1bYCihAF82Ho68srxu2b'
    ]
]);

$fp = fopen("img/no-bg.png", "wb");
fwrite($fp, $res->getBody());
fclose($fp);




?>
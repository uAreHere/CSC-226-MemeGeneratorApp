<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../class/employees.php';

/*
//Connecting to Redis server on localhost
$redis = new Redis();
$redis->connect('127.0.0.1', 3306);
echo "Connection to server successful";
//check whether server is running or not
echo "Server is running: " . $redis->ping();
*/

/*$meme = isset($_GET['meme']) ? $_GET['meme'] : die();


$get_data = callAPI('GET', 'https://programming-memes-images.p.rapidapi.com/v1/memes', false);
//$redis->set($meme, $get_data);
//echo "Stored string in redis:: " .$redis->get($meme);
echo $get_data;


function callAPI($method, $url, $data){
    $curl = curl_init();
    switch ($method){
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER,array(
        "X-RapidAPI-Host: programming-memes-images.p.rapidapi.com",
        "X-RapidAPI-Key: fe69074b52msh21246e2da1ff9a7p11dc1ajsn77095d9d5edf"
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    return $result;
}

?>
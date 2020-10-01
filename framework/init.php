<?php
session_start();
require_once("${path}/framework/db_client.php");
require_once("${path}/models/users.php");
require_once("${path}/models/localities.php");

$db = new MysqliDb($db_servername, $db_username, $db_password, $db_name);

function require_with($pg, $vars){
    extract($vars);
    require $pg;
}

function reload_with($para, $url=false){
    if(!$url) $url = $_SERVER['PHP_SELF'];
    $query = http_build_query($para);
    echo "<script>location='${url}?${query}';</script>";
}

function is_logged_in(){
    return isset($_SESSION["user_id"]);
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>
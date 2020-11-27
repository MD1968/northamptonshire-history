<?php ob_start();


$db['db_host'] = "mysql.hostinger.com";
$db['db_user'] = "u740267581_markd";
$db['db_pass'] = "Admin1234!";
$db['db_name'] = "u740267581_cms";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

//if($connection) {
//
//echo "We are connected";
//
//}


?>
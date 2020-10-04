<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

//print_r($db);
//array_assoctiation 쓰는 또다른 방법

foreach($db as $key => $value){ // key, value 쌍 가져옴
    define(strtoupper($key), $value);
    // constant로 만드는 작업
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//if($connection){
//    echo "we are connected";
//}


?>
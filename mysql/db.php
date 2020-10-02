<?php
    
$connection = mysqli_connect('localhost', 'root', '', 'loginapp'); //url, id, pw, db

if(!$connection){
    die("Database connection failed");
    // 출력 후 밑의 코드 종료
}
?>
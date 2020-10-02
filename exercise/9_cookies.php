<?php
$name = "somename";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7); // 초 * 분 * 시 * 일수
setcookie($name, $value, $expiration); // name, value, expiration
//$_COOKIE에 저장
//chrome://settings/cookies 에서 확인
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_COOKIE['somename'])){
        $someone = $_COOKIE['somename'];
    } else {
        $someone = "";
    }
    
    echo $someone;
?>
    
</body>
</html>
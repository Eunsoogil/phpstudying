<?php
    session_start();
//session 저장, PHPSESSID, session을 쓰고 싶은 페이지는 항상 포함되어 있어야함
//chrome://settings/cookies 에서 확인
    $_SESSION['greeting'] = "hello";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    
</body>
</html>
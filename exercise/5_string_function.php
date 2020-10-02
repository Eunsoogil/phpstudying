<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$string = "Hello student do you like the class"; 
    
echo strlen($string);
// 공백 포함 글자수
echo "<br>";
    
echo strtoupper($string);

echo "<br>";

$hello  = "Hello World";
$trimmed = trim($hello, 'HdWr');
// 양끝에 포함된 문자 제거
echo $trimmed;
echo "<br>";
var_dump($trimmed);
    
$trimmed = trim($hello, 'Helrld');
// hell 까지 지워짐
echo $trimmed;
echo "<br>";
var_dump($trimmed);
    
// https://www.php.net/manual/en/ref.strings.php 참고

?>
    
</body>
</html>
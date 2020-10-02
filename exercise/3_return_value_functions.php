<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
function addNum($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}
    
$result = addNum(34, 64);
    
echo $result;
    
echo "<hr>";

$result = addNum(100, $result);
    
echo $result;
?>
    
</body>
</html>
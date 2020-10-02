<?php
class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    function moveWheels(){
        echo "Wheels move";
    }
    
    function __construct(){
        // 생성시 자동 실행
        echo $this -> wheels = 10;
    }
}

$bmw = new Car();
$merces_benz = new Car();

//$bmw -> moveWheels();
//$merces_benz -> moveWheels();
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
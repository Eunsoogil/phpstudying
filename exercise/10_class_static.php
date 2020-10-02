<?php
class Car {
    
    static $wheels = 4;
    var $hood = 1;
    
    function moveWheels(){
        echo "car move";
        //$this -> wheels = 10;
        Car::$wheels = 10;
    }
    
}


$bmw = new Car();
//echo $bmw -> wheels;
echo Car::$wheels;
// static은 class를 명시해야만 가능, $표시 주의
Car::moveWheels();

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
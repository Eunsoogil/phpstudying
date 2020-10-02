<?php
class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    function moveWheels(){
        echo "car move";
        $this -> wheels = 10;
    }
    
    function createDoors(){
        echo "door created" . "<hr>";
        $this -> doors = 6;
    }
}

//if(method_exists("Car", "moveWheels")){
//    echo "methood exists";
//    
//} else {
//    echo "no";
//}

$bmw = new Car();
$truck = new Car();
$bmw -> moveWheels();
echo "<hr>";
echo $bmw -> wheels . "<hr>";
// $ 표시가 없음
$bmw -> wheels = 8;
echo $bmw -> wheels . "<hr>";
$truck -> createDoors();
echo $truck -> doors . "<hr>";
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
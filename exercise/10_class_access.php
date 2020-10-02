<?php
class Car {
    public $wheels = 4;
    // var와 같음
    protected $hood = 1;
    // 현재 class와 상속받은 class만 사용 가능
    private $engine = 1;
    // 현재 class만 사용 가능
    var $doors = 4;
    
    function moveWheels(){
        echo "Wheels move";
    }
    
    function showProperty(){
        echo $this -> hood;
        echo "<hr>";
        echo $this -> engine;
    }

}

$bmw = new Car();

echo $bmw -> wheels;
echo "<hr>";
//echo $bmw -> hood; 안됨
//echo $bmw -> engine; 안됨
echo $bmw -> showProperty();

class Semi extends Car {
    function showProperty(){
        echo $this -> hood;
        echo "<hr>";
        //echo $this -> engine; 동작 자체를 안함
    }
}
$semi = new Semi();
echo "<hr>";
echo $semi -> showProperty();

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
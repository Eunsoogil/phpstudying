<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
    $number = 10;
    echo $number . "<br>";
    define("name", 1000);
    
    const difWay = "const";
    // 새로운 방식
    const ANIMALS = array('dog', 'cat', 'bird');
    
    echo name;
    echo difWay;
    print_r(ANIMALS);
    
    //difWay = 1;
    //const difWay = 1;
    //안됨
    echo difWay;
?>
    
</body>
</html>
<?php
class Car {
    function moveWheels(){
        echo "Wheels move";
    }
}

if(method_exists("Car", "moveWheels")){
    echo "methood exists";
    
} else {
    echo "no";
}
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
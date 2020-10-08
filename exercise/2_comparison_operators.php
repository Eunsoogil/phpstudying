<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    /*
    equal ==
    identical ===
    not eq !=
    not iden !==
    */
    
    if(4 == '4'){
        echo "it is true"."<br>";
        echo 4 + 4;
        echo "<br>";
        echo 4 + "4"; // ?????
        echo "<br>";
        echo 4 + 4 . "<br>";
    }
    
    echo "<hr>";
    if(4 !== '4'){
        echo "it is not";
    }
?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    function init(){
        say_Something();
        echo "<hr>";
        cal();
    }
    
    function cal(){
        echo 456 + 456;
    }
    
    function say_Something(){
        echo "hey man";
    }
    
    init();
    
?>
</body>
</html>
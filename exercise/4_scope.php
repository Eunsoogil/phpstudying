<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    $x = "outside";
    
    function convert(){
        global $x;
        // $x를 전역변수로
        $x = "inside";
    }

    echo $x;
    echo "<br>";
    convert();
    echo $x;
    
    
    
?>
    
</body>
</html>
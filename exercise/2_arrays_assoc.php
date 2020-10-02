<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
    $number = [10, 20, 49];
    echo $number[1] . "<br>";
    
    $names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz');
    echo "<hr>";
    print_r($number);
    echo "<hr>";
    print_r($names);
    echo "<hr>";
    echo $names['first_name'] . " " .  $names['Last_Name'];
    
?>
    
</body>
</html>
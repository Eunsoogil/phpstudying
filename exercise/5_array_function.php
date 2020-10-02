<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $list = [345,4156,478,955,2156,457,66]; 
    echo max($list);
    echo "<br>";
    echo min($list);
    echo "<br>";
    sort($list);
    print_r($list);
    echo "<br>";
    
    //https://www.php.net/manual/en/ref.array.php
?>
    
</body>
</html>
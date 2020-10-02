<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $numberList1 = array(23,6256,454,'45612','565',456,'<h1>hello</h1>');
    $numberList2 = [23,6256,454,'45612','565',456,'<h2>hello</h2>'];
    
    echo $numberList1[0];
    echo "<hr>";
    echo $numberList1[6];
    echo "<hr>";
    echo $numberList2[6];
    echo "<hr>";
    print_r($numberList1);
?>
    
</body>
</html>
<?php
$file = "example.txt";

if($handle = fopen($file, 'r')) {

    //echo $content = fread($handle, 10); // each 10 bytes equal a character
    echo $content = fread($handle, filesize($file)); // each 10 bytes equal a character
    
    fclose($handle);
} else {
    echo "the file cound not be written";
}

?>
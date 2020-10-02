<?php
$file = "example.txt";

if($handle = fopen($file, 'w')) {

    fwrite($handle, "php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning php learning ");
    
    fclose($handle);
} else {
    echo "the file cound not be written";
}

?>
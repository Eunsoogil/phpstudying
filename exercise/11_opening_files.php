<?php
$file = "example.txt";

$handle = fopen($file, 'w');
// w는 writing, 쓰기 위해 연다는 뜻
fclose($handle);
// 자원 반납, demo/exercise 안에 파일 생김

?>
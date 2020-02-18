<?php
//read file with old value
$path = 'count.text';
$file = fopen($path, 'r');
$count = fgets($file, 1000);//we read first 1000 characters
fclose($file);
$count = abs(intval($count)) + 1;
echo "You are visitor No. $count";
//save file with new value
$file = fopen($path, 'w');
fwrite($file, $count);
fclose($file);
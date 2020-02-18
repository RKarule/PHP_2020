<?php
require_once '../src/util.php';
$myname = "Ruta";
$favorite = "Burgers";
$num = 42;

add(5, 10);

echo "My number is $num";
echo "<hr>";
echo "My number is " . ($num + 10);
echo "<hr>";
echo "Hello my $myname!";
echo "<hr>";
echo 'Hello my $myname!';
echo "<hr>";
echo "I am " . $myname . " and I like " . $favorite;
echo "<hr>";
// we use "." not "+" for string.
// below won't work!
//echo "I am "+$myname+" and I like"+$favorite;
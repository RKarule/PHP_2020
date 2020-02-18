<?php
// $scriptfile = "main.js";
define("CONSTANT", "Hello world.");
const CON2 = "Hello RCS";
require_once '../src/util.php';
require '../src/template/head.php';

echo CON2;
echo CONSTANT;

$mybigstring = <<<MYBIG
<p>More stuff</p>
<p>More stuff</p>
<p>More stuff</p>
MYBIG;
$myname = "Ruta";
$favorite = "Burgers";
$num = 42;
require '../src/template/header.php';
echo $mybigstring;
var_dump($num);
echo "<br>";
print_r($num);
echo "<br>";
var_dump($myname);
echo "<br>";
print_r($myname);
add(5, 10);
echo "My number is $num and " . CONSTANT;
echo "<hr>";
echo "My number is " . ($num + 10);
echo "<hr>";
echo "Hello my $myname!";
echo "<hr>";
echo 'Hello my $myname!';
echo "<hr>";
echo "I am " . $myname . " and I like " . $favorite;
echo "<hr>";
require '../src/template/footer.php';
// we use "." not "+" for string.
// below won't work!
//echo "I am "+$myname+" and I like"+$favorite;
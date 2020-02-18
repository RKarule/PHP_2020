<?php
const HR = "<hr>";
echo "<h1>Arrays</h1>";
$myarr = [1,2,5,3,32,6,6,7,7];
foreach ($myarr as $val) {
    echo "Number is $val<br>";
}
echo HR;
foreach ($myarr as $key => $val) {
    echo "Key: $key is $val<br>";
}
echo HR;
$cars = [
    "BMW" => 525,
    "VW" => "Golf",
    "Audi" => "A4",
];
foreach ($cars as $key => $val) {
    echo "Key: $key is $val<br>";
}

echo "<hr>";
$cars["Citroen"] = "C9";
var_dump($cars);
$cars[5] = "Just a number";
var_dump($cars);

<?php
require "../src/template/head.php";
// write Fizzbuzz to show each item as li in an ol
//so loop and then if elseif inside
echo "<h1>FizzBuzz<h1>";

//echo "<ol>";
echo "<div class='container'>";
for ($i = 0; $i < 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        //echo "<li>FizzBuzz</li>";
        echo "<div class='element fizzbuzz'>Fizzbuzz</div>";
    } elseif ($i % 3 == 0) {
        //echo "<li>Fizz</li>";
        echo "<div class='element fizz'>Fizz</div>";
    } elseif ($i % 5 == 0) {
        //echo "<li>Buzz</li>";
        echo "<div class='element buzz'>Buzz</div>";
    } else {
        //echo "<li> Number: $i</li>";
        echo "<div class='element number'>No: $i</div>";
    }
    
}
//echo "</ol>";
echo "</div>";
require "../src/template/footer.php";
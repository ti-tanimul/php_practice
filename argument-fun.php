<?php
function first($num){
    $num = 10; 
}

function second(&$num){
    $num = 15;
}
$number = 20;
first ($number);
echo "your number $number <br>";

second ($number);
echo "your number $number <br>";
?>
<?php
function store($n, $m){
    return ($n * $m);
}

// $fruits = array("apple", "watermilon", "goava", "banana");
$fruit = array(1,2,3,4,5);
echo "<pre>";
print_r(array_reduce($fruit, "store", 10));
echo "</pre>";
?>
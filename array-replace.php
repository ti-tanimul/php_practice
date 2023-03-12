<?php
// $students = ['sagor', 'a' => 'rakib', 'shakib'];
// $replace = ['a'=>'shifat', 'roni'];

$students  = array('a' => array ('sahkib'), 'b' => array ('rakib'), 'c' => array ('ashd', 'skdj'));
$replace  = array('a' => array ('isjdfs'), 'b' => array ('sidjf'), 'c' => array ('ashdsdf'));
$newArray = array_replace_recursive($students, $replace);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>
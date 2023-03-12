<?php
$name = ["rakib", "shakib", "emon", "sjdkcs"];
$newArray = array_slice($name,1,2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>

<?php
$name = ["rakib", "shakib", "emon", "sjdkcs"];
print_r(array_slice($name,1, 2));
?>
<?php
$cloth = ["a" => "shirt", "b" => "pant", "c" => "panjabi"];
$womenCloth = ["b" => "sharee", "bokra", "Hijab"];
// $menCloth = ["shoes", "t-shart"];

$newCloth = array_merge_recursive($cloth, $womenCloth);
echo "<pre>";
print_r($newCloth);
echo "</pre>";
?>
<!-- Array combine -->
<?php
$name = ["rakib", "shakib", "emon", "sjdkcs"];
$age = ["15", "21", "24", 23];

$count = array_combine($name, $age);
echo "<pre>";
print_r($count);
echo "</pre>";
?>
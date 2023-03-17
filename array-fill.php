<!-- array_fill_keys() -->
<?php
$electronic = array("mobile", "laptop", "camera", "light", "fan");
$cloth = array("mobile", "laptop", "camera", "light", "fan");
echo "<pre>";
print_r(array_fill_keys($electronic, "dokan12"));
print_r(array_fill_keys($cloth, "dokan24"));
echo "</pre>";
?>

<!-- Array Fill() -->
<?php
echo "<pre>";
print_r(array_fill(1, 6, "hello"));
echo "</pre>";
?>
<?php
$area = array("Dhanmondi", "Mohammadpur", "Uttora", "Farmget", "Gazipur", "Komlapur");
krsort($area);

echo "<pre>";
print_r($area);
echo "</pre>";
?>

<?php
$array1 = array('cnjsdnc', 'kasdcn', 'okdm', 'sdkm');
$array2 = array('jsdf', 'sdokf', 'skdf', 'sadj');

array_multisort($array1, $array2);
echo "<pre>";
print_r($array1);
echo "</pre>";

echo "<pre>";
print_r($array2);
echo "</pre>";
?>
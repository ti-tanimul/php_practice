<!-- index array using for loop -->
<?php
$students = array('Tanimul', 'shifat', 'sagor', 'polash', 45, 45.6, 'dffg');
$count = count($students);

for($x=1; $x<$count; $x++){
echo $students[$x];
echo "<br>";
}
?>

<!-- index array using foreach loop -->
<?php
$students = array('Tanimul', 'shifat', 'sagor', 'polash', 45, 45.6, 'dffg');
foreach ($students as $count){
    echo $count. "<br>";
}
?>

<!-- array print -->
<?php
$students = array('Tanimul', 'shifat', 'sagor', 'polash', 45, 45.6, 'dffg', 'Tanimul', 'shifat', 'sagor', 'polash', 45, 45.6, 'dffg');
echo "<pre>";
print_r ($students);
echo "</pre>";
?>

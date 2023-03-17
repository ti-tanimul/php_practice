<!-- String str_Split -->
<?php
$var = "Tanimul islam";
echo "<pre>";
print_r(str_split($var, 2));
echo "</pre>";
?>

<?php
$var = "djvs eiojc zjcisja dscwoelf";
print_r(str_word_count($var));
?>
<!-- String chunk_split -->
<?php
$var1 = "Tanimul islam";
echo "<pre>";
print_r(chunk_split($var1, 2, '-'));
echo "</pre>";
?>


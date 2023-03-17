<?php
function medicine($n, $m){
    return "$n for $m";
}

$No = array(1,2,3,4,5,6,7,8);
$brand = array('squre', "ase", "aci", "white Horse pharma", "beximco", "incepta", "opconin");
echo "<pre>";
print_r(array_map('medicine', $No, $brand));
echo "</pre>";
?>



<?php
function animal($v){

if($v == "Dog"){
    return "cat";
}
return $v;
}

$a = array("Elephent", "Dog", "Hourse");
echo "<pre>";
print_r(array_map("animal", $a));
echo "</pre>";
?>
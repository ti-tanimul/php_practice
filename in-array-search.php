<?php
// $cars = array('name', 'model', 'model', 'price');
$cars = array('a' =>'name', 'b'=>'model', 'c'=> 'color', 'd'=> 'price');
if(array_search('model', $cars)){
 echo "correct";
}else{
    echo "wrong";
};
?>
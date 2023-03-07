<?php

/*function firstName (){
    echo "this is my first function <br>";
}
function lastName(){
    echo "this is my last function";

}
firstName();
lastName();  */



function hello($fname = "first", $lname){
echo "Hello $fname $lname.<br>";
}

function sum($a, $b){
    echo $a + $b;

}

hello("tanimul", "islam");
hello("shakil", "mridha");
sum(10,20); 


// Returning Value

/*
function sum($x, $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo sum (5, 10). "<br>";
  echo sum (14, 18). "<br>";
  echo sum (23, 12); */

//   function name(&$age){
//     $age .= "24";
//   }

//   $boyos = "your age";
//   name($boyos);
//   echo $boyos;




  ?>

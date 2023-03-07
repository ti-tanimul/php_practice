<?php

function display($number){
    if($number <= 10){
        echo "tanimul: $number<br>";
        display($number + 2);
    }
}
display(3);
?>
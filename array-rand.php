<?php
$random = array("jack", "king", "queen", "ace", "joker");
$random_key=array_rand($random,3);

echo $random[$random_key[0]]. "<br>";
echo $random[$random_key[1]]. "<br>";
echo $random[$random_key[2]];
?>
<!-- Array suffol -->
<!-- <?php
$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
echo "<pre>";
print_r($my_array);
echo "</pre>";
?> -->
<?php
$product = array(
    array("Watch",10,7),
    array("baby toys", 20, 13),
    array("Shart", 45, 42),
    array("shoes", 7,8)
);
echo $product[0][0]." price: " .$product[0][1]. " Offer Price: ". $product[0][2]. "<br>";
echo $product[1][0]. " price: " . $product[1][1]. " Offer Price: ". $product[1][2]. "<br>";
echo $product[2][0]. " price: " . $product[2][1]. " Offer Price: ". $product[2][2]. "<br>";
echo $product[3][0]. " price: " . $product[3][1]. " Offer Price: " . $product[3][2]. "<br>";

for($row = 0; $row <4  ; $row++){
    echo "<b><p>Your Product $row</p></b>";
    echo "<ul>";
    for($col = 0; $col<3; $col++){
        echo $product[$row][$col]. "<br>";
    }echo "</ul>";
    
}

?>
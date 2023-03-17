<!-- Array walk() -->
<?php
function district($value, $key){
    echo "$key Your Hometown is $value<br>";
}
$homeTown = array("Tanimul"=>"Patuakhali", "sagor"=>"Chadpur", "shifat"=>"Dhaka");
array_walk($homeTown, "district");
?>

<!-- Arrar Walk recursive() -->
<?php
function division($value, $key){
    echo "$key Your Hometown is $value<br>";
}
$homeTown = array("Tanimul"=>"Patuakhali", "sagor"=>"Chadpur", "shifat"=>"Dhaka");
$town = array($homeTown, "rabbi"=>"Dhaka", "polash"=>"jessore");
array_walk_recursive($town, "division");
?>


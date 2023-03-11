<?php
/*
$employe = [
    [1, "Tanimul", "CEO", 100000],
    [2, "Shakil", "M.D", 50000],
    [3, "Sagor", "Seniur Developer", 40000],
    [4, "Tanjir", "Joniur Developer", 20000],
    [5, "Rabbi", "Admin", 30000]
];
echo "<pre>";
print_r($employe);
echo "</pre>";

foreach($employe as $office){
    foreach($office as $location){
        echo $location;
    }
    echo "<br>";            
}
*/

$marks = [
    "Tanimul" =>
        ["Bangla" => 80, "Math" => 96, "English" =>73],
    "Shakil" =>    
        ["Bangla" => 67, "Math" => 89, "English" =>56],
    "Shakib" =>
        ["Bangla" => 66, "Math" => 45, "English" =>67]
];
echo "<table border='2px' cellpadding='5px', cellspacing ='0px'>";
foreach($marks as $subject=>$sub){
    echo "<tr><td> $subject </td>";
    foreach($sub as $sub1){
        echo "<td> $sub1 </td>";
    }
    echo "<br>";
}
echo "</table>";

echo "<pre>";
echo print_r($marks);
echo "</pre>";

?>
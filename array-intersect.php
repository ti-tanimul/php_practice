<?php
$shops = array("a"=>"shoes", "b"=>"cloth", "c"=>"watch", "d"=>"bags", "e"=>"mobile");
$mall = array("a"=>"shoes", "g"=>"shoes", "e"=>"mobile");
echo "<pre>";
print_r(array_intersect_uassoc($mall, $shops, 'shoes'));
echo "</pre>";
?>
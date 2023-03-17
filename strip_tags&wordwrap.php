<?php
$tag = "hello <b>tanimul</b> sdkfown jdicns dfmc<u>Islam</u>";
echo strip_tags($tag);
?>
<br>
<br>
<?php
$wrap = "hello tanimul how are you jasiojdiax ojsijcs sdnn";
echo wordwrap($wrap, 3, "<br>", TRUE);
?>
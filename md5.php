<?php
$password = "hello";
echo md5($password);
?>
<br>
<?php
$password = "tanimul";
echo md5($password, true). "<br>"; //true means binary format.
echo md5($password, false). "<br><br>";

echo sha1($password, true). "<br>";
echo sha1($password, false);
?>
<br>
<br>

<?php
$pass = "tanimul";
if(md5($pass)== "06595351439ebef9e194fe77b516e6ad"){
    echo "password match";
}
?>

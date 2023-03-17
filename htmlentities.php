<?php
$link = '<a href="https:/www.php.net">PHP</a>';
echo $link . "<br>";
echo htmlentities($link);
?>
<br>
<br>

<?php
echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";
?>
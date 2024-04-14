<?php
$t1=$_COOKIE['text'];
$t2=$_COOKIE['f_style'];
$t3=$_COOKIE['f_size'];
$t4=$_COOKIE['f_color'];
$t5=$_COOKIE['bg_color'];

echo"<html><body bgcolor=$t5>
<font size=$t3 color=$t4>
<$t2>$t1</$t2>
</body></html>
";
?>
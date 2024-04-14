<?php
$t=$_COOKIE['text'];
$s=$_COOKIE['style'];
$si=$_COOKIE['size'];
$color=$_COOKIE['font_color'];
$bg=$_COOKIE['font_bg'];
echo"<html>
<body bgcolor=$bg>
<font size=$si color=$color>
<$s>$t</$s>
</font>
</body>
</html>";
?>
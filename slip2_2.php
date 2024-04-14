<?php
setcookie('text',$_GET['t1']);
setcookie('style',$_GET['t2']);
setcookie('size',$_GET['t3']);
setcookie('font_color',$_GET['t4']);
setcookie('font_bg',$_GET['t5']);
echo"<html><body><form method=get action=slip2_3.php>
your settings:";
echo"<br> text=".$_GET['t1'];
echo"<br> style=".$_GET['t2'];
echo"<br> size=".$_GET['t3'];
echo"<br> font_color=".$_GET['t4'];
echo"<br> font_bg=".$_GET['t5'];
echo"<br> <input type=submit value=submit>";
echo"</form><body></html>";
?>
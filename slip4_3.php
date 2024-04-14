<html>
    <body>
        <h3>employee information</h3>
        <?php
        session_start();
        $b=$_GET['ba'];
        $da=$_GET['da'];
        $hra=$_GET['hra'];
        echo"eno : ".$_SESSION['eno'];
        echo"<br>ename : ".$_SESSION['enm'];
        echo"<br>address : ".$_SESSION['add'];
        echo"<br>basic : ".$b;
        echo"<br>da : ".$da;
        echo"<br>hra : ".$hra;
        $total=$b+$da+$hra;
        echo"<br>total : ".$total;
        ?>
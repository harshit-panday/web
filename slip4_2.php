<html>
    <body>
        <form method="get" action="slip4_3.php">
        <?php
        session_start();
        $_SESSION['eno']=$_GET['eno'];
        $_SESSION['enm']=$_GET['enm'];
        $_SESSION['add']=$_GET['add'];
        ?>
        <h3>earning</h3>
        basic: <input type=text name=ba><br>
        da :<input type=text name=da><br>
        hra :<input type=text name=hra><br>
        <input type=submit name=submit>
        </form>
    </body>
</html>

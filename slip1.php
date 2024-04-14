<html>
    <head>
        <title>track webpage</title>
    </head>
    <body>
        <form>
        <?php
        session_start();
        if(isset($_SESSION['count'])){
            $_SESSION['count']=$_SESSION['count']+1;
        }else{
            $_SESSION['count']=1;
        }
        echo "<h3> this page is accesses</h3> ".$_SESSION['count']." times";
        ?>
        </form>
    </body>
</html>
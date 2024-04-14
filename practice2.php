<?php
$name=$_GET['nm'];
$pd=$_GET['pass'];
session_start();

if($name==$pd){
    echo"welcome";
}
elseif(isset($_SESSION['count'])<=3){
    echo"invalid password ".$_SESSION['count'];
    $_SESSION['count']+=1;
    if(isset($_SESSION['count'])>3){
        echo"attempts used ".$_SESSION['count'];

    }
}
else{
    $_SESSION['count']=1;
}





?>
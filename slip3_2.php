<?php
session_start();
$name=$_GET['nm'];
$password=$_GET['pass'];
if($name==$password){
    echo"LOGIN SUCCESSFULL.. WELCOME";
}
elseif(isset($_SESSION['count'])){
    echo" invalid password ".$_SESSION['count'];
    $_SESSION['count']=$_SESSION['count']+1;
    if($_SESSION['count']>3){
        echo"attempt finished";
    }
}
else{
    $_SESSION['count']=1;
}
?>
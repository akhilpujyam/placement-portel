<?php
session_start();
if($_SERVER["REQUEST_METHOD"]="POST")
{
    include("db_connect.php");
    $a=$_POST['user'];
    $b=$_POST['password'];
    $q="SELECT * FROM `users` where fname='$a' && pwd='$b';";
    if(mysqli_query($conn,$q))
    {
        
        if(isset($_POST["remember"]))
        {
            setcookie("user",$a,time()+(86400*30));
            setcookie("password",$b,time()+(86400*30));
        }
        $_SESSION['message']="login succes";
        $_SESSION["id"]=$a;
        header("location:cookie_success.php");
    }
    else
    {

        $_SESSION["message"]="login unsuccess";
        header("location:cookie_login.php");
    }
}
?>
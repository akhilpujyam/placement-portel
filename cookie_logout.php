<?php
session_start();
session_destroy();
if(isset($_COOKIE['user']))
{
    setcookie("user",'',time()-3600);
    setcookie("password",'',time()-3600);
    
}
header("location:cookie_login.php");
?>
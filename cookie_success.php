<?php
session_start();
if(isset($_SESSION['id']))
{
echo "login success";?>
<a href='cookie_logout.php'>logout</a>
<?php
}
else{
    $_SESSION['message']="wrong entry please login";
    header("location:cookie_login.php");
}
?>
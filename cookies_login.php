<?php
session_start();
?>
<html>
    <body>
        <center>
        <form method="POST" action="cookie_validate.php">
            <input type="text" name="user"><br>
            <input type="text" name="password"><br>
            <input type="checkbox" name="remember" value="remember"><br>
            <input type="submit">
</center>
</body>
</html>
<?php
if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
}
unset($_SESSION['message']);

?>
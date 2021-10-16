<!DOCTYPE html>
<html>
<body>
<?php
include 'db_connect.php';
$uname=$email=$password='';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$uname=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["pwd"];
$squery="SELECT * FROM users WHERE email= $email and pwd=$password;
$rows=mysqli_query($conn,$squery);
if($rows>0 )
{
echo "login Sucessful";
}
else
{
echo "login failed";
}
}
?>
</body>
</html>
<html>
<head>
</head>
<body>

<?php
include 'db_connect.php'; 
$fname=' ';$lname=' ';$email=' ';$password=' ';$Rpassword=' ';$occupation=" ";
if($_SERVER["REQUEST_METHOD"] == "POST")
   {    
     $fname = $_POST['fname'];
     $lname=$_POST['lname'];
     $regd=$_POST['regd'];
     $email = $_POST['email'];
     $password = $_POST['pwd'];
     $Rpassword=$_POST['pwd2'];
     $occupation=$_POST['rb'];
     if($occupation=="student")
     {
     $sql = "INSERT INTO users (fname,lname,regd,email,pwd,rpwd,occupation)
     VALUES ('$fname','$lname','$regd','$email','$password','$Rpassword','$occupation')";
     }
     if($occupation=="professor")
     {
      $sql = "INSERT INTO professor_table (fname,lname,regd,email,pwd,rpwd,occupation)
      VALUES ('$fname','$lname','$regd','$email','$password','$Rpassword','$occupation')";
     }
     if (mysqli_query($conn, $sql)) 
     {
        echo "<center><h2>New record has been added successfully !<h2></center>";
        
          header("location:loginCredintials.html");
        
     } 
     else 
      {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
mysqli_close($conn);
}
else{
echo 'wrong reach';
}
?>
</body>
</html>
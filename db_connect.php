<?php
   
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "placement_portal";
   
     // Create a connection 
     if($conn = mysqli_connect($servername, 
         $username, $password,$database))
         {}
     else{
         echo "connection to database not sucessful";
     }
?>

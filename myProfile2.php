<?php session_start(); ?>
<html> 
    <head> 
    </head>
    <body> 
        <?php
         include("db_connect.php");
        
        
         
        $k2=$_SESSION['sregd'];
        $sql="SELECT * from `professor_table` where regd='$k2'";
         
         
        
         if($query_obj=mysqli_query($conn,$sql))
         {
             if($rows=mysqli_fetch_assoc($query_obj))
             {
                 echo "<center><h2>".$rows['fname']."<br><br>".$rows['lname']."<br><br>".$rows['regd']."</h2></center>";
             }
         }
        
        ?>

    </body>
</html>
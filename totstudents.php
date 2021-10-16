<html> 
    <head> 
    </head>
    <body bgcolor="lightgold" text="white"> 
        <?php
         include("db_connect.php");
        
        
        
        
            $sql="SELECT * from `users`"; 
         
        
         if($query_obj=mysqli_query($conn,$sql))
         {
             if($rows=mysqli_fetch_assoc($query_obj))
             {
                 $rowcounts=mysqli_num_rows($query_obj);
                 echo "<center><h2>students count:".$rowcounts."</h1></center>";
             }
         }
        
        ?>

    </body>
</html>
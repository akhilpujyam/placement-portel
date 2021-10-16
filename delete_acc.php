<html> 
    <head> 
        <style>
             input[type=text]
   {
       width: 20%;
       padding: 12px 20px;
       margin: 8px 0;
       display: inline-block;
       border: 2px solid rgb(10, 10, 10);
       box-sizing: border-box;
       border-radius: 12px;
   }
   button {
       background-color: rgb(17, 16, 17);
       color: white;
       padding: 15px 20px;
       margin: 8px 0;
       cursor: pointer;
       width: 20%;
       border-radius: 12px;
       border: 2px solid #d5e6d5;
       box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
   }
   h3 {
  display: block;
  font-size: 3em;
  margin-top: 0.67em;
  margin-bottom: 0.67em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
}

        </style>
    </head>
    <body> 
    <form name="del_acc" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <center>Enter RegisterId <input type='text' name='delregd'></center><br><br>
        <center><button type='submit'>submit</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
         include("db_connect.php");
         $regd=' ';
        
         $regd=$_POST['delregd'];
         
         
         $query="DELETE FROM users WHERE regd='$regd'";
         if(mysqli_query($conn,$query))
         {
            echo "<center><h3>Account Deleted sucessfully<h3></center>";
            echo "<center><a href='delete_acc.php'<button>Delete another</button></a></center>";
         }
         else{
             echo "insertion failed";
         }    
        }
    ?>

    </body>
</html>
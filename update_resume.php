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
            input[type="submit"]{
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


        </style>
            

    </head>
    <body>
       
        <form name="update_resume" method='POST' action="*">
        <center>Roll No:<input type=text name=regd></center><br><br>
        <center>Name <input type=text name=name></center><br><br>
        <center>Grade <input type=text name=grade></center><br><br>
        <center>Projects <input type=text name=projects></center><br><br>
        <center><input type="submit"></center>
        <center><h3>not yet uploaded your resume upload here</h3></center>
        <center><button>upload resume</button></center>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            include("db_connect.php");
            $regd=$_POST["regd"];
            $name=$_POST["name"];
            $grade=$_POST["grade"];
            $projects=$_POST["projects"];
            $query=" UPDATE `resume` SET 'name'='$name','grade'='$grade','projects'='$projects' where 'regd'='$regd'";
            if(mysqli_query($query)) 
            {
                 echo "updated resume successfully";
            }
            else 
            {
             echo "DB connection failed";
            }
        }
           
        ?>
    </body>
</html>
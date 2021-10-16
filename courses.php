<html>
    <head>
        <style>
            button{
            background-color: rgb(17, 16, 17);
           color: white;
           padding: 5px 5px;
           cursor: pointer;
           width: 50%;
           border-radius: 12px;
           border: 2px solid #d5e6d5;
           box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
       
        }
            table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
        </style>
    </head>
    <body>
        <table>
            <?php
             include("db_connect.php");
             $query="";
             echo "<tr><th>course</th>"."  "."<th>duration</th>"."  "."<th>enroll</th></tr>";
             if($query_obj = mysqli_query($conn,"SELECT * FROM `courses`"))
             {
               while($row=mysqli_fetch_assoc($query_obj))
                {
               
                   echo "<tr><td><img src=".$row['imagelink']." width=100 height=100></td><td>".$row['duration']."</td><td><button>".$row['enroll']."</button></td></tr>";
                }
             }
                 
             
            ?>
        </table>
    </body>
</html>
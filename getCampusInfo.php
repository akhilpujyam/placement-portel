<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
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
<tr>
<th>company</th>
<th>Employ_role</th>
<th>Salary</th>
<th>registration</th>
<th>exam</th>
</tr>
<?php
include "db_connect.php";
$a=$b=$c=$d=$e=" ";
$sql="select * from campus_drive";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
    $a=$row["company"];
    $b= $row["employ_role"];
    $c= $row["salary"];
    $d= $row["registration_date"];
    $e= $row["exam"];
    echo "<tr><td>".$a."</td><td>".$b." </td><td>".$c."</td><td>".$d."</td><td>".$e."</td></tr>";
    #echo "<br><br>";

}
?>
</body>
</html>

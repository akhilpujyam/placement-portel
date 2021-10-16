<?php
if(isset($_POST['submit']))
{
$num1=$_POST['num1'];
$num2=$_POST['num2'];
echo "Addition of two numbers is : ".($num1+$num2);
}
?>
<html>
<body>
<form action="" method="POST">
<input type="number" name="num1" value="<?php if($num1) echo $num1 ?>" required>
<input type="number" name="num2" value="<?php if($num2) echo $num2 ?>" required>
<input type="submit" name="submit">
</form>
</body>
</html>

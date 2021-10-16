<!DOCTYPE html>
<html>
<head>
<title>form</title>
</head>
<body>
<form action="#" method="POST" onsubmit="return fun()" style="text-align: center;"
action="action.php">
Name:<input type="text" name="name" id="name" required>
<br><br>
UserName:<input type="text" name="uname" id="uname" required>
<br><br>
Password:<input type="password" name="pwd" id="pwd" required>
<br><br>
Email:<input type="text" name="email" id="email" required>
<br><br>
Place:<input type="text" name="place" id='place' required>
<br><br>
<input type="submit" value="submit" >
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" >
</form>
<script type="text/javascript">
function fun()
{
var name =document.getElementById('name').value;
var uname=document.getElementById('uname').value;
var pwd=document.getElementById('pwd').value;
var email=document.getElementById('email').value;
var ru=/^[a-zA-Z0-9]+$/;
var rp=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}$/;
var words = name.split(" ");
var rem=/^^[a-zA-Z][-_.a-zA-Z0-9]{5,29}@gmail.com$/;
for (let i = 0; i < words.length; i++) {
words[i] = words[i][0].toUpperCase() + words[i].substr(1);
}
var k=words.join(" ");
if (name!=k) {
alert("The first Letter of every word in the name should be Capital");
return false;
}
else if(uname.length!=10){
alert("The Username canbe anything with letters and numbers.(Must be of length 10 characters)");
return false;
}
else if(!uname.match(ru)){
alert("The Username canbe anything with letters and numbers.(Must be of length 10 characters)");
return false;
}
else if(!pwd.match(rp)){
alert("The password mustcontain a capital letter, a small letter, a number and a special character. It should be minimum of8 characters and maximum of characters.");
return false;
}
else if(!email.match(rem)){
alert("Email shouldcontain '@gmail.com' in the end");
return false;
}
else{
var nm1=uname.slice(0,5);
var nm2=uname.slice(-3);
alert("welcome");
return true;
}
}
</script>
</body>
</html>

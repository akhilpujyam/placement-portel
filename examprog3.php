<!DOCTYPE html>
<html>
<head>
<title>form</title>
</head>
<body>
<form action="#" method="POST" onsubmit="return fun()" style="text-align: center;"
action="action.php">
Name:<input type="text" name="name" id="name" required>
<div style="font-size: 15px; color: red;" id="n1"></div>
<br>
UserName:<input type="text" name="uname" id="uname" required>
<div style="font-size: 15px; color: red;" id="n2"></div>
<br>
Password:<input type="password" name="pwd" id="pwd" required>
<div style="font-size: 15px; color: red;" id="n3"></div>
<br>
Email:<input type="text" name="email" id="email" required>
<div style="font-size: 15px; color: red;" id="n4"></div>
<br>
Place:<input type="text" name="place" id='place' required>
<br>
<input type="submit" value="submit" >
&nbsp;&nbsp;
<input type="reset" name="reset" >
</form>
<script type="text/javascript">
function fun()
{
document.getElementById("n1").innerHTML=""
document.getElementById("n2").innerHTML=""
document.getElementById("n3").innerHTML=""
document.getElementById("n4").innerHTML=""
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
document.getElementById("n1").innerHTML="The first Letter of every word in the name should be Capital";
return false;
}
else if(uname.length!=10){
document.getElementById("n2").innerHTML="The Username canbe anything with letters and numbers.(Must be of length 10 characters)";
return false;
}
else if(!uname.match(ru)){
document.getElementById("n2").innerHTML="The Username canbe anything with letters and numbers.(Must be of length 10 characters)";
return false;
}
else if(!pwd.match(rp)){
document.getElementById("n3").innerHTML="The password mustcontain a capital letter, a small letter, a number and a special character. It should be minimum of8 characters and maximum of characters.";
return false;
}
else if(!email.match(rem)){
document.getElementById("n4").innerHTML="Email shouldcontain '@gmail.com' in the end";
return false;
}
else{
var nm1=uname.slice(0,3);
var nm2=uname.slice(-3);
alert(nm1+nm2);
return true;
}
}
</script>
</body>
</html>

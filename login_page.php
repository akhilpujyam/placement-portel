<html>
<head>
<title>Placement Portal</title>
<style>
   
    
   input[type=text],
   input[type=password],input[type=email]
   {
       width: 20%;
       padding: 12px 20px;
       margin: 8px 0;
       display: inline-block;
       border: 2px solid rgb(10, 10, 10);
       box-sizing: border-box;
       border-radius: 12px;
   }
   
   h1 {
  display: block;
  font-size: 3em;
  margin-top: 0.67em;
  margin-bottom: 0.67em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
}

 select{
        width: 120px;
        height: 30px;
        border: 1px solid rgb(243, 236, 236);
        font-size: 18px;
        color: #080808;
        background-color: rgb(221, 214, 214);
        border-radius: 5px;
        
      }  
  
input[type=checkbox]{
  width: 45px;
  height: 15px;
  background: #555;
  border-radius: 5px;
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

<script>
   function justcheckfield()
   {
      var empt1 = document.forms["loginform"]["name"].value;
      var empt2 = document.forms["loginform"]["regd"].value;
      var empt3 = document.forms["loginform"]["email"].value;
      var empt4 = document.forms["loginform"]["pwd"].value;
      if (empt1 == "" || empt2 == "" || empt3 == "" || empt4 == "")
      {
          alert("Please fill all fields");
          return false;
      }
   }
</script>
</head>
<body bgcolor="black"  text="white" font-style:'italic'>



<center><h1>Sign-in To Your Account</h1></center>
<form name="loginform" method="POST" action="login_validate.php" onsubmit="return justcheckfield()">
<center><label for='selecting'><h3>Choose Role:</h3></label></center>
<center>
   <select name = "dropdown">
            <option value = "student" selected><h4>Student</h4></option>
            <option value = "professor">Professor</option>
            <option value = "company">Company</option>
         </select>
</center><br/>
<!--center> username <input type='text' name='name'></center--><br/>
<center> regd NO: <input type='text' name='regd' placeholder="Registered No"></center><br/>
<center> Gmail-ID <input type='email' name='email' placeholder="Gmail"></center><br/>
<center> Password <input type='password' name='pwd' placeholder="Password"></center><br/>
<center> <input type='checkbox' name='cbox' placeholder="select role">keep me sign-in</center><br/>
<center> <button type='submit'>SIGN-IN</button></center><br/>
<center>if you are a new user sign-up</center><br/>
</form>
<!--creating signup button in anchor tag and directing to signup form-->
<center><a href="sign-up.html"><button>SIGN-UP</button></a></center>     
</body>
</html>

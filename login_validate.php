<?php session_start(); ?>
<html>
    <head>
        <style>
            button{
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
            <body bgcolor="black"  text="white" font-style:'italic'>
<?php
if($_SERVER ['REQUEST_METHOD'] == 'POST')
{
   $pwd=$_POST['pwd'];
   $email=$_POST['email'];
   $role=$_POST['dropdown'];
   $regd=$_POST['regd'];
   $_SESSION['sregd']=$_POST['regd'];
   $servername = "localhost"; 
   $username = "root"; 
   $password = "";
   $database = "placement_portal";
   
     // Create a connection 
   include("db_connect.php");
                   if($role=='professor')
                   {
                      $query="SELECT * FROM `professor_table` WHERE regd='$regd'";
                   }
                   if($role=='student')
                   {
                      $query="SELECT * FROM `users` WHERE regd='$regd'";
                   }
                   if($row=mysqli_query($conn,$query))
                   { 
                          //echo "just after query<br>";
                          $row2=mysqli_fetch_assoc($row);
                          //echo $row2['email']." ".$row2['fname']." ".$row2['lname']." ".$row2['regd']." ".$row2['rpwd']."<br>";
                          if($row2!="")
                           {
                              if(($pwd==$row2['pwd']) && ($email==$row2['email']) && ($regd==$row2["regd"]))
                              {
                                     echo "login successful<br>";
                                     if($role=="student")
                                     {
                                      header("location: student_main.html");
                                     }
                                     if($role=="professor")
                                     {
                                      header("location: professor_main.php");
                                     }
                              }
                              else
                              { 
                                //header("location: loginCredintials.php");
                                echo "<script>alert('Wrong Login');</script>";
                                echo "<html>
                                       <head>
                                        </head>
                                        <body>
                                        <center>
                                        <a href='loginCredintials.php'><button>Again SignIn</button></a>
                                        <a href='sign-up.html'><button>Sign-Up</button></a>
                                        </center>
                                        </body>
                                        </html>";
                              }
                            }
                           else
                            {
                              //header("location: loginCredintials.php");
                              echo "<script>alert('No Data To Retrieve');</script>";
                              echo "<html>
                                       <head>
                                        </head>
                                        <body>
                                        <center>
                                        <a href='loginCredintials.php'><button>Again SignIn</button></a>
                                        <a href='sign-up.html'><button>Sign-Up</button></a>
                                        </center>
                                        </body></html>";
                            }
                        } 
                        else
                        {
                            //header("location: loginCredintials.php");
                           echo "<script>alert('Wrong Operation on DataBase');</script>";
                           echo "<html>
                                       <head>
                                        </head>
                                        <body>
                                        <center>
                                        <a href='loginCredintials.php'><button>Again SignIn</button></a>
                                        <a href='sign-up.html'><button>Sign-Up</button></a>
                                        </center>
                                        </body></html>";
                        }   
                    }
                    else
                    {
                        echo "fault at post method";
                        echo "<html>
                                       <head>
                                        </head>
                                        <body>
                                        <center>
                                        <a href='loginCredintials.php'><button>Again SignIn</button></a>
                                        <a href='sign-up.html'><button>Sign-Up</button></a>
                                        </center>
                                        </body></html>";
                    }                                      
?>
</body>
                </html>
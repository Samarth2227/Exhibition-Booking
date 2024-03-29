<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wd";
 
 // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
}
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['fname'])) 
    {
        $fname = $_REQUEST['fname'];    // removes backslashes
        $fname = mysqli_real_escape_string($conn, $fname);
        $u_password = $_REQUEST['u_password'];
        $u_password = mysqli_real_escape_string($conn, $u_password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE fname='".$_POST['fname']."'AND u_password='".$_POST['u_password']."'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['fname'] = $fname;
            // Redirect to user dashboard page
            header("Location: dashboard.html");
        }
    }
            ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Here</title>
      <!-- <link rel="stylesheet" href="lgnstyle.css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
         @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  height: 100%;
}
body{
  display: grid;
  place-items: center;
  background: #dde1e7;
  text-align: center;
}
.content{
  width: 330px;
  padding: 40px 30px;
  background: #dde1e7;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.content .text{
  font-size: 33px;
  font-weight: 600;
  margin-bottom: 35px;
  color: #595959;
}
.field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}
.field:nth-child(2){
  margin-top: 20px;
}
.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  outline: none;
  border: none;
  font-size: 18px;
  background: #dde1e7;
  color: #595959;
  border-radius: 25px;
  box-shadow: inset 2px 2px 5px #BABECC,
              inset -5px -5px 10px #ffffff73;
}
.field input:focus{
  box-shadow: inset 1px 1px 2px #BABECC,
              inset -1px -1px 2px #ffffff73;
}
.field span{
  position: absolute;
  color: #595959;
  width: 50px;
  line-height: 50px;
}
.field label{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 45px;
  pointer-events: none;
  color: #666666;
}
.field input:valid ~ label{
  opacity: 0;
}
.forgot-pass{
  text-align: left;
  margin: 10px 0 10px 5px;
}
.forgot-pass a{
  font-size: 16px;
  color: #3498db;
  text-decoration: none;
}
.forgot-pass:hover a{
  text-decoration: underline;
}
button{
  margin: 15px 0;
  width: 100%;
  height: 50px;
  font-size: 18px;
  line-height: 50px;
  font-weight: 600;
  background: #89cff0;
  border-radius: 25px;
  border: none;
  outline: none;
  cursor: pointer;
  color: #000;
  box-shadow: 2px 2px 5px #BABECC,
             -5px -5px 10px #ffffff73;
}
button:focus{
  color: #3498db;
  box-shadow: inset 2px 2px 5px #BABECC,
             inset -5px -5px 10px #ffffff73;
}
.sign-up{
  margin: 10px 0;
  color: #595959;
  font-size: 16px;
}
.sign-up a{
  color: #3498db;
  text-decoration: none;
}
.sign-up a:hover{
  text-decoration: underline;
}
.credit a{
  text-decoration: none;
  color: #00acee;
  font-weight: 800;
}
.credit {
  text-align: center;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
      </style>
   </head>
   <body>
      <div class="content">
         <div class="text">
            Login Form
         </div>
         <form name="f1" onsubmit="return validation()" method="post">
            <div class="field">
               <input type="text" name="fname">
               <span class="fas fa-user"></span>
               <label>Email or Phone</label>
            </div>
            <div class="field">
               <input type="password"name="u_password" >
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>

            
            <button type="submit">Sign In</button>
            <div class="sign-up">
               Not a member?
               <a href="register.php">Create account</a>
            </div>
         </form>
      </div>
      <script src="rscript.js"></script> 

    <script>  
            function validation()  
            {  
                var id=document.f1.fname.value;  
                var ps=document.f1.u_password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
   </body>
</html>
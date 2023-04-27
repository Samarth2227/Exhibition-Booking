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


 $sql = "INSERT INTO tb (cid,cname,cmail,t_num) VALUES ('".$_POST['cid']."','".$_POST['cname']."','".$_POST['cmail']."','".$_POST['t_num']."')";
 $result = mysqli_query($conn,$sql);
    
 echo $sql;
 if ($result) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
  header("location: dashboard.html");
  
  $conn->close();
  

?>
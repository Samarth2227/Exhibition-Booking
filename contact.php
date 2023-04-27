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


 $sql = "INSERT INTO contacts(cid,cname,cmail,cmessage) VALUES ('".$_POST['cid']."','".$_POST['cname']."','".$_POST['cmail']."','".$_POST['cmessage']."')";
 $result = mysqli_query($conn,$sql);
    
 echo $sql;
 if ($result) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
  //header("location: contactus.html");
  
  $conn->close();
  

?>
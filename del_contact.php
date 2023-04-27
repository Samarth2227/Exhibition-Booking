<?php  

$link = mysqli_connect("localhost", "root", "", "wd");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	$id = $_GET["id"];
	$con = mysqli_connect("localhost","root","","wd");
	$sql = "DELETE FROM contacts WHERE cid=$id";
	//echo $sql;
	mysqli_query($con,$sql);
	
	header("location:Selectuser.php");
?>
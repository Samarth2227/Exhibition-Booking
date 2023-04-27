<?php 

if(isset($_GET["id"]))
{
	$id = $_GET["id"];
	$con = mysqli_connect("localhost","root","","wd");
	$sql = "SELECT * FROM contacts WHERE cid =$id";
	$rs = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($rs,MYSQLI_BOTH);
}
	

if(isset($_POST["id"]))
{
	$id = $_POST["id"];
	$username = $_POST["username"];
	$msg = $_POST["msg"];
	$mail = $_POST["mail"];

	$con = mysqli_connect("localhost","root","","wd");
	
	$sql = "UPDATE `contacts` SET `cname` = '$username', `cmail` = '$mail', `cmessage` = '$msg' WHERE `contacts`.`cid` = $id";
	//echo "$sql";

	mysqli_query($con,$sql);
	header("location:Selectuser.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,500,300,700,400'><link rel='stylesheet' href='tblstyle.css'>
<div class='aa_htmlTable'>
<h2 class='aa_h2' align="center">UPDATE DATA</h2>
<!-- <center> -->
	<form method="post">
	<table>
		<input type="hidden" name="id" value="<?php echo$_GET['id']?>"/>
		<tr><td>Name</td><td><input type="text" name="username" value="<?php echo $row['cname'];?>"></td></tr>
		<tr><td>Mail</td><td><input type="text" name="mail" value="<?php echo $row['cmail'];?>"></td></tr>
		<tr><td>Message</td><td><input type="text" name="msg" value="<?php echo $row['cmessage'];?>"></td></tr>
		<tr><th colspan="2" rowspan="2"><input type="submit" name="t6" value="Update" ></th></tr>
	</table>
</form>
<!-- </center> -->
</body>
</html>

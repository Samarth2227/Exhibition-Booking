<?php
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
else {
}



$sql = "SELECT * FROM contacts where cid='".$_GET['text']."'";
$result = mysqli_query($conn,$sql);

?>
<link rel='stylesheet' href='tblstyle.css'>
<h2>Your Contacts</h2>
<table>
<tr>
<td>cid</td>
<td>cname</td>
<td>cmail</td>
<td>cmessage</td>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
echo '
<tr>
<td>'.$row['cid'].'</td>
<td>'.$row['cname'].'</td>
<td>'.$row['cmail'].'</td>
<td>'.$row['cmessage'].'</td>

</tr>
';
}
?>
</table>

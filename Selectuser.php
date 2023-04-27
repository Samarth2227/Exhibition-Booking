<?php
$link = mysqli_connect("localhost", "root", "", "wd");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM `contacts`";
if($result = mysqli_query($link, $sql))
{
    if(mysqli_num_rows($result) > 0)
    {
        echo"<link rel='stylesheet' href='tblstyle.css'>";
echo "<div class='aa_htmlTable'>";
echo "<h2 class='aa_h2' align='center'>Contact Data</h2>";
        echo "<table>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>cid</th>";
                echo "<th>cname</th>";
                echo "<th>cmail</th>";
                echo "<th>cmessage</th>";
                echo "<th>DELETE</th>";
                echo "<th>UPDATE</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";
            echo "<tr>";
                echo "<td>" . $row['cid'] . "</td>";
                echo "<td>" . $row['cname'] . "</td>";
                echo "<td>" . $row['cmail'] . "</td>";
                echo "<td>" . $row['cmessage'] . "</td>";
                echo "<td><a href='del_contact.php?id=".$row['cid']."'>Delete</a></td>";
                echo "<td><a href='update.php?id=".$row['cid']."'>Edit</a></td>";
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<?php
    $cname = $_POST['cname'];
    $cmail = $_POST['cmail'];
    $ustate = $_POST['ustate'];
    $ucity = $_POST['ucity'];
    $cmessage = $_POST['cmessage'];


    $conn = new mysqli('localhost','root','','wd');
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
         
    }else{
        $stmt = $conn->prepare("insert into contacts(cname,cmail,ustate,ucity,cmessage) values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$cname,$cmail,$ustate,$ucity,$cmessage);
        $stmt->execute();
        echo "registration successfully....";
        $stmt->close();
        $conn->close();
    }

?>
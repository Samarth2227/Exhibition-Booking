<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $umail = $_POST['umail'];
    $ucity = $_POST['ucity'];
    $umobile = $_POST['umobile'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $conn = new mysqli('localhost','root','','wd');
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
         
    }else{
        $stmt = $conn->prepare("insert into users(fname,lname,gender,umail,ucity,umobile,u_password,uconfirm_password) values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssiss",$fname,$lname,$gender,$umail,$ucity,$umobile,$password,$confirm_password);
        
        $stmt->execute();
        echo "registration successfully done....";
        
        $stmt->close();
        $conn->close();
    }
    header("location: Home_Page.html");
?>
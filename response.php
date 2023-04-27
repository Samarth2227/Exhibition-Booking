<?php
$data = $_GET['datavalue'];

$a = array ('PUNE','MUMBAI');
$b = array ('RAJKOT','AHMEDABAD');
$c = array ('UPDAIPUR','ABU');

if($data == "Maharashtra"){
    foreach($a as $aone){
        echo "<option> $aone </option>";
    }
}
if($data == "Gujarat"){
    foreach($b as $bone){
        echo "<option> $bone </option>";
    }
}
if($data == "Rajasthan"){
    foreach($c as $cone){
        echo "<option> $cone </option>";
    }
}
?>
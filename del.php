<?php

$con=mysqli_connect("localhost","root","","db21");
$arr=array();
$arr=$_POST['did'];


foreach ($arr as $did) {
	$del="delete from user where id='$did'";
	$con->query($del);
	
}
header("location:demoindex.php");
?>
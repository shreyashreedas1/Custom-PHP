<?php session_start();?>
<?php
$con=mysqli_connect("localhost","root","","pro1");

$fn=$_POST['fname'];
$ln=$_POST['lname'];
//$pn=$_POST['pn'];
$email=$_POST['email'];
$pw=$_POST['password'];
//$gender=$_POST['gender'];
//$file=$_FILES['dp']['name'];
//$s=$_FILES['dp']['tmp_name'];
//$country=$_POST['country'];

//move_uploaded_file($s,"images/".$file);
echo $ins="insert into customer set fname='$fn',lname='$ln',email='$email',password='$pw'";
$con->query($ins);



header("location:index.php");
?>

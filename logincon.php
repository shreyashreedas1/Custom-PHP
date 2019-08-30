<?php session_start();?>
<?php
$con=mysqli_connect("localhost","root","","pro1");

$email=$_POST['email'];
$pw=$_POST['password'];
$sel="SELECT * FROM customer WHERE email='$email' AND password='$pw'";
$rs=$con->query($sel);
if($rs->num_rows>0)
{
	while($row=$rs->fetch_assoc())
	{
		$_SESSION['uid']=$row['id'];
		$_SESSION['fname']=$row['fname'];
		//$_SESSION['lname']=$row['lname'];
		header("location:index.php");
	}
}
else
{
	?>
	<script>alert("INVALID PASSWORD");
	window.location="index.php";
</script>
<?php
}
?>


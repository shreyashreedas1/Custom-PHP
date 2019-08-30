<?php session_start();?>
<?php
  $con=mysqli_connect("localhost","root","","pro1");	
	$did=$_POST['did'];

  

    $del="DELETE FROM cart WHERE id='$did'";

	$con->query($del);

	header("location:cart.php");
	?>
   
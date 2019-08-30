<?php session_start();?>
<?php
$con=mysqli_connect("localhost","root","","pro1");

$pid=$_POST['pid'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$total=$_POST['quantity']*$_POST['price'];
//move_uploaded_file($s,"images/".$file);
$sel="select * from cart where pid='$pid'";
$rs=$con->query($sel);
if($rs->num_rows>0)
{
	while($row=$rs->fetch_assoc())
	{
		$quantity=$quantity+$row['quantity'];
		$total=$quantity*$_POST['price'];

	$ins="update cart set pid='$pid',price='$price',quantity='$quantity',total='$total' where id='".$row['']."'";
	$con->query($ins);
	}
}
else
{

$ins="insert into cart set pid='$pid',price='$price',quantity='$quantity',total='$total'";
$con->query($ins);
}
header("location:cart.php");
?>

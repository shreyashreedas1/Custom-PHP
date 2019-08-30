<?php session_start();?>
<?php
$con=mysqli_connect("localhost","root","","pro1");
$id=$_POST['eid'];
$qty=$_POST['qty'];
$price=$_POST['price'];
$total=$_POST['price']*$qty;
 $upd="UPDATE cart set quantity='$qty',total='$total' where id='$id'";
$con->query($upd);
header("location:cart.php");
?>
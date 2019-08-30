<?php
$con=mysqli_connect("localhost","root","","pro1");

$name=$_POST['name'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$category=$_POST['category'];
$file=$_FILES['img']['name'];
$s=$_FILES['img']['tmp_name'];
$sku=$_POST['sku'];
move_uploaded_file($s,"../images/".$file);

$ins="insert into food set name='$name',quantity='$quantity',price='$price',category='$category',img='$file',sku='$sku'";
$con->query($ins);



header("location:index.php");
?>

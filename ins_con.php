<?php
$con=mysqli_connect("localhost","root","","db411");

$name=$_POST['name'];
$price=$_POST['price'];
$file=$_FILES['image']['name'];
$s=$_FILES['image']['tmp_name'];
$prodet=$_POST['prodet'];
$ins="insert into product set name='$name',price='$price',image='$file',prodet='$prodet'";
$con->query($ins);
move_uploaded_file($s,"product_img/".$file);


header("location:index.php");
?>

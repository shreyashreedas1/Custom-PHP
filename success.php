<?php session_start();?>
<?php

  $con=mysqli_connect("localhost","root","","pro1");
$lid=$_SESSION['LID'];
$up="UPDATE morder SET pstatus='1' WHERE id='$lid'";
$con->query($up)
?>
<script type="text/javascript">
	alert ("THANK YOU FOR SHOPPING");
	window.location="index.php";
</script>
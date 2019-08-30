<?php
 session_start();
 session_destroy();
 //header("location:index.php");
 ?>
	<script>alert("You are Logged out");
	window.location="index.php";
</script>




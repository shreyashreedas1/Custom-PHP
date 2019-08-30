<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="images/bi.jpg" class="banner">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
				      </button>
				      <a class="navbar-brand" href="index.php">CHOKHER KHIDE</a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="index.php">Home</a></li>
				        <li><a href="#">Categories</a></li>
				        <li class="active"><a href="cart.php">My cart</a></li>
				        <li><a href="#">About Us</a></li>
				      </ul>
				      <!-- <form class="navbar-form navbar-left" action="/cartcon.php">
      					<div class="form-group">
        				<input type="text" class="form-control" placeholder="Search" name="search">
      					</div>
      					<button type="submit" class="btn btn-default">Submit</button>
    				</form> -->
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#register" data-toggle="modal" data-target="#register">Sign Up</a></li>
                <li><a href="#login" data-toggle="modal" data-target="#login"">Login</a></li>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
	
	<h2>My Cart</h2>
	<table class="table" style="width:100%">

	<tr>
		<th style="text-align: center;border: 4px solid Black;">Product</th>
		<th style="text-align: center;border: 4px solid Black;">Image</th>
		<th style="text-align: center;border: 4px solid Black;">Quantity</th>
		<th style="text-align: center;border: 4px solid Black;">Price</th>
		<th style="text-align: center;border: 4px solid Black;">Total</th>
		<th style="text-align: center;border: 4px solid Black;">Delete</th>
	</tr>
	<?php

	$con=mysqli_connect("localhost","root","","pro1");
	$sel="select * from cart";
    $rs=$con->query($sel);
    $st=0;
    while($row = $rs->fetch_assoc())
    {
    	$st=$st+$row['total'];
    	$pid=$row['pid'];
    	$cart="select * from food where id='$pid'";
    	$rc=$con->query($cart);
    	while($row1 = $rc->fetch_assoc())
      	{
	?>
     <tr>
		<th style="text-align: center;border: 2px solid Black;"><?php echo $row1['name'];?></th>
		<th style="text-align: center;border: 2px solid Black;"><img src="images/<?php echo $row1['img']; ?>" style="height: 100px;"></th>
		<th style="text-align: center;border: 2px solid Black;" >

		<form action= "ucart.php" method="post">
			<input type="number" name="qty" min="1" value="<?php echo $row['quantity']; ?>"></input>
			<input type="hidden" value="<?php echo $row['price'];?>" name="price"></input>
			<input type="hidden" name="eid" value="<?php echo $row['id'];?>"></input>
			<input type="submit" value="Save"  class="btn btn-info"></input> 
		</form>

		</th>

		<th style="text-align: center;border: 2px solid Black;" ><?php echo $row['price'];?></th>
		<th style="text-align: center;border: 2px solid Black;" ><?php echo $row['total'];?></th>

		<th style="text-align: center;border: 2px solid Black;">
			<form action="delcart.php" method="post">
				<input type="hidden" name="did" value="<?php echo $row['id'];?>"></input>
				<input type="submit" value="Delete"  class="btn btn-info"></input> 
        	</form>
        </th>
	</tr>

	<?php 
    	}
  	}
    ?>
	<tr>
		<th colspan="4" style="text-align: right; border: 2px solid Black;">Sub Total --</th>
		<th colspan="2" style="border: 2px solid Black;"><?php echo $st;?></th>
	</tr>
	<tr>
		<th colspan="4" style="text-align: right;border: 2px solid Black;">GST total 18% -- </th>
		<th colspan="2" style="border: 2px solid Black;"><?php $gst=$st+($st*18)/100; echo $gst;?></th>
	</tr>
	<tr>
		<th colspan="4" style="text-align: right;border: 2px solid Black;">Shipping Charges -- </th>
		<th colspan="2" style="border: 2px solid Black;">100</th>
	</tr>
	<tr>
		<th colspan="4" style="text-align: right;border: 2px solid Black;">Grand Total -- </th>
		<th colspan="2" style="border: 2px solid Black;"><?php $gt=$gst+100; echo $gt;?></th>
	</tr>

	</table>
	<tr>
    <th calspan="4" style="text-align: center;border: 2px solid Black;"></th>

	<form action="checkout.php" method="post">
		<input type="submit" value="Ckeckout"  class="btn btn-info"></input> 
    </form>
    </tr>

	<div class="row">
		<div class="col-md-12">
			<p class="footer">&copy; All Right Resarved CHOKHER KHIDE 2019<p>
		</div>
	</div>
	
<!-- Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Log In</h4>
      </div>

      <div class="modal-body">
        <form action="customercon.php" method="post" enctype="multipart/form-data">

          <p>Email address</p>
          <p><input type="email" name="email" class="form-control" placeholder="Email address" required="required"></p>

          <p>Password</p>
          <p><input type="password" name="password" class="form-control" placeholder="Password" required="required">

          <p><button type="submit" name="log" class="btn btn-succes">Login</button></p>

       	</form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
      </div>

      <div class="modal-body">
        <form action="customercon.php" method="post" enctype="multipart/form-data">

   		<p>Fname</p>
     	<p><input type="text" name="fname" class="form-control" placeholder="Enter First Name" required="required"></p>

     	<p>Lname</p>
      	<p><input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required="required"></p>
        
    	<p>Email address</p>
        <p><input type="email" name="email" class="form-control" placeholder="Email address" required="required"></p>

        <p>Password</p>
        <p><input type="password" name="password" class="form-control" placeholder="Password" required="required">

        <p><button type="submit" name="reg" class="btn btn-succes">Sign Up</button></p>

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	
</body>
</html>
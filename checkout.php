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
				        <li><a href="index.php">Home</a></li>
				        <li><a href="#">Categories</a></li>
				        <li class="active"><a href="cart.php">My Cart</a></li>
				        <li><a href="#">About Us</a></li>
				      </ul>
				      <form class="navbar-form navbar-left" action="/cartcon.php">
      					<div class="form-group">
        				<input type="text" class="form-control" placeholder="Search" name="search">
      					</div>
      					<button type="submit" class="btn btn-default">Submit</button>
    				</form>
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#register" data-toggle="modal" data-target="#register">Sign Up</a></li>
                <li><a href="#login" data-toggle="modal" data-target="#login"">Login</a></li>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
	
	<h2>Post Address</h2>
	<table class="table" style="width:100%">

	<tr>
		<th style="text-align: center;">Billing Address</th>
		<th style="text-align: center;">Shipping Address</th>
	</tr>
	</table>
    <form action="checkoutcon.php" method="post" enctype="multipart/form-data">
	<div class="row">
	<div class="col-md-5">
	
   		<p>Name</p>
     	<p><input type="text" name="bname" id="bname" class="form-control" placeholder="Name" required="required"></p>

     	<p>Phone No.</p>
     	<p><input type="number" name="bpno" id="bpno" class="form-control" placeholder="Phonne No." required="required"></p>

     	<p>Address</p>
      	<p><input type="text" name="baddress" id="baddress" class="form-control" placeholder="Address" required="required"></p>

      	<p>Land Mark</p>
      	<p><input type="text" name="blandmark" id="blandmark" class="form-control" placeholder="Land Mark" required="required"></p>
        
    	<p>City</p>
        <p><input type="text" name="bcity" id="bcity" class="form-control" placeholder="City" required="required"></p>

        <p>Country</p>
        <p><input type="text" name="bcountry" id="bcountry" class="form-control" placeholder="Country" required="required">

        <p>State</p>
        <p><input type="text" name="bstate" id="bstate" class="form-control" placeholder="State" required="required">

        <p>Pin</p>
        <p><input type="number" name="bpin" id="bpin" class="form-control" placeholder="Pin" required="required">
	</div>

	<div class="col-md-2">

	</div>

	<div class="col-md-5">
	

		<input type="checkbox" name="cbox" value="" onclick="copys();">  Shipping address same as billing </input>

   		<p>Name</p>
     	<p><input type="text" name="sname" id="sname" class="form-control" placeholder="Name" required="required"></p>

     	<p>Phone No.</p>
     	<p><input type="number" name="spno" id="spno" class="form-control" placeholder="Phonne No." required="required"></p>

     	<p>Address</p>
      	<p><input type="text" name="saddress" id="saddress" class="form-control" placeholder="Address" required="required"></p>

      	<p>Land Mark</p>
      	<p><input type="text" name="slandmark" id="slandmark" class="form-control" placeholder="Land Mark" required="required"></p>
        
    	<p>City</p>
        <p><input type="text" name="scity" id="scity" class="form-control" placeholder="City" required="required"></p>

        <p>Country</p>
        <p><input type="text" name="scountry" id="scountry" class="form-control" placeholder="Country" required="required">

        <p>State</p>
        <p><input type="text" name="sstate"  id="sstate" class="form-control" placeholder="State" required="required">

        <p>Pin</p>
        <p><input type="number" name="spin" id="spin" class="form-control" placeholder="Pin" required="required">

        
	</div>
	</div>

	<p><button type="submit" style="width:100%" name="ptp" class="btn btn-succes"> Proceed To Payment </button></p>
</form>

<script type="text/javascript">
function copys(){
  document.getElementById("sname").value=document.getElementById("bname").value;
  document.getElementById("spno").value=document.getElementById("bpno").value;
  document.getElementById("saddress").value=document.getElementById("baddress").value;
  document.getElementById("slandmark").value=document.getElementById("blandmark").value;
  document.getElementById("scity").value=document.getElementById("bcity").value;
  document.getElementById("scountry").value=document.getElementById("bcountry").value;
  document.getElementById("sstate").value=document.getElementById("bstate").value;
  document.getElementById("spin").value=document.getElementById("bpin").value;



}
</script>


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
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
		 <div class="container-fluid">
    </div>
    </div>
  
    <div class="col-md-12">
      <nav class="navbar navbar-inverse">
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
                <li><a href="category.php">Categories</a></li>
                <li><a href="cart.php">My cart</a></li>
                <li><a href="aboutus.php">About Us</a></li>
              </ul>
                    <form class="navbar-form navbar-left" action="index.php">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            
              <ul class="nav navbar-nav navbar-right">
                <?php

                if(isset($_SESSION['fname']))
                {
                  ?>
                  <li><a href="#">hi!<?php echo $_SESSION['fname']?></a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                  

                  <?php
                }else{
                  ?>
                
                <li><a href="#register" data-toggle="modal" data-target="#register">Sign Up</a></li>
                <li><a href="#login" data-toggle="modal" data-target="#login">Login</a></li>
              <?php 
             }
             ?>
              
              </ul>
            </div>
          </div>
        </nav>
      </div>
   
      
<div class="row">
    <?php 
      $con=mysqli_connect("localhost","root","","pro1");
      if(isset($_GET['search']))
      {
        $s=$_GET['search'];
        $sel="select * from food where name Like'$s%'";
      }
      else
      {
        $sel="select * from food";
      }

      $rs=$con->query($sel);
      while($row = $rs->fetch_assoc())
      {
    ?>
    
      <div class="col-md-3">
        <div class="product">
          <img src="images/<?php echo $row['img']; ?>" style="height: 100px;">
          <h4 class="pname"><?php echo $row['name'];?>  </h4>
          <h4><?php echo $row['quantity']; ?></h4>
          <h4 class="pprice">Rs:<?php echo $row['price']; ?></h4>
          
          <form action="cartcon.php" method="post">
          <input type="hidden" name="pid" value="<?php echo $row['id'];?>" />
          <input type="hidden" name="price" value="<?php echo $row['price'];?>" />
          <input type="number" name="quantity" value="1" min="1" />
          <input type="submit" name="" value="Add to Cart" class="btn btn-info"></input> 

          </form> 
        </div>
      </div>
  
    <?php 
      }
    ?>
    </div>

    <div class="row">
      <div class="col-md-12">
        <p class="footer">&copy; All Right Resarved CHOKHER KHIDE 2019<p>
      </div>
    </div>
  </div>
        <!-- Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form action="logincon.php" method="post" enctype="multipart/form-data">
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
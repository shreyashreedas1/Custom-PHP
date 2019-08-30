<?php session_start();?>
<?php

  $con=mysqli_connect("localhost","root","","pro1");
  $bname=$_POST['bname'];
  $sname=$_POST['sname'];
  $bpno=$_POST['bpno'];
  $spno=$_POST['spno'];
  $baddress=$_POST['baddress'];
  $saddress=$_POST['saddress'];
  $bstate=$_POST['bstate'];
  $sstate=$_POST['sstate'];
  $bcity=$_POST['bcity'];
  $scity=$_POST['scity'];
  $bcountry=$_POST['bcountry'];
  $scountry=$_POST['scountry'];
  $blandmark=$_POST['blandmark'];
  $slandmark=$_POST['slandmark'];
  $bpin=$_POST['bpin'];
  $spin=$_POST['spin'];

  $ins="insert into morder set bname='$bname',sname='$sname',bpno='$bpno',spno='$spno',saddress='$saddress',baddress='$baddress',bstate='$bstate',sstate='$sstate',scity='$scity',bcity='$bcity',scountry='$scountry',bcountry='$bcountry',slandmark='$slandmark',blandmark='$blandmark',bpin='$bpin',spin='$spin'";
  $con->query($ins);
  $lid=mysqli_insert_id($con);

  	$sel="select * from cart";
    $rs=$con->query($sel);
    
    
    $gt=0;
    
     
    
    while($row = $rs->fetch_assoc())
    {
    	$qty=$row['quantity'];
    	$total=$row['total'];
    	$price=$row['price'];
       $gt=$gt+$total;
    	$pid=$row['pid'];
        $ins="insert into sorder set qty='$qty',total='$total',pid='$pid',price='$price',oid='$lid'";
        $con->query($ins);

      }
      $_SESSION['GT']=$gt;
      $_SESSION['LID']=$lid;


	header("location:pay.php")
?>
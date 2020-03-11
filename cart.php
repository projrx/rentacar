<?php 
session_start();
if(isset($_SESSION['user'])){
 $username= $_SESSION['user'];  // Initializing Session with value of PHP Variable
 $userid= $_SESSION['userid'];  // Initializing Session with value of PHP Variable
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include 'include/head.php'; ?>
	<!-- Document Title
		============================================= -->
		<title>Rent a Car Website</title>

		<?php $link="blank" ?>


	<?php 
	
	for ($i=0; $i < 100 ; $i++) { 

	  if(isset($_POST['upqty'.$i])){
	    $msg="Unsuccessful" ;

	    $id=$_POST['upqty'.$i];
	    $newqty=$_POST['qty'.$i];

	    $rows =mysqli_query($con,"SELECT carid FROM orders where id='$id' " ) or die(mysqli_error($con));
        $n=0;
        while($row=mysqli_fetch_array($rows)){
          $carid = $row['carid']; 
	    }
	    $rows =mysqli_query($con,"SELECT price FROM car where id='$carid' " ) or die(mysqli_error($con));
        $n=0;
        while($row=mysqli_fetch_array($rows)){
          $price = $row['price']; 
	    }
	    
	    $total=$price*$newqty;	
	  
      $data=mysqli_query($con,"UPDATE orders SET `days`='$newqty',`total`='$total' where `id`='$id'")or die( mysqli_error($con) );


	    ($msg=mysqli_error($con));

	    if(empty($msg))  $msg=" Cart Updated.";


	  }

	}


	 ?>

	<?php 
	
	for ($i=0; $i < 100 ; $i++) { 

	  if(isset($_POST['rem'.$i])){
	    $msg="Unsuccessful" ;

	    $id=$_POST['rem'.$i];
	
	    $sql = "DELETE FROM orders WHERE id=$id ";


	    mysqli_query($con, $sql) ;
	    ($msg=mysqli_error($con));

	    if(empty($msg))  $msg=" Deleted";


	  }

	}


	 ?>



	</head>

	<body class="stretched">

	<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

		<!-- Header
			============================================= -->
			<?php 	include 'include/header.php'; ?>
			<div class="container">

  <h1>Shopping Cart</h1>

		<table class="table table-hover">

		  <thead>
		    <th  style="max-width: 200px;">Image</th>
		    <th>Product</th>
		    <th>Price</th>
		    <th>Quantity</th>
		    <th>Remove</th>
		    <th>Total</th>
		  </thead>
		  <tbody>
		  	<?php 

		  	$rows =mysqli_query($con,"SELECT * FROM orders where status='cart' AND userid='$userid'" ) or die(mysqli_error($con));
		  	$n=0;
		  	$stotal=0;

		  	while($row=mysqli_fetch_array($rows)){

		  	  $oid = $row['id']; 
		  	  $pid = $row['carid']; 
		  	  $qty = $row['days']; 


		  	  $rowsx =mysqli_query($con,"SELECT name,price,img0,brand FROM car where id='$pid' " ) or die(mysqli_error($con));
		  	  while($rowx=mysqli_fetch_array($rowsx)){
		  	  	$total=0;
		  	    $price = $rowx['price'];  
		  	    $brand = $rowx['brand'];  
		  	    $proname = $rowx['name']; 
		  	    $img = $rowx['img0']; 
		  	    $total = $qty*$price;
		  	    $stotal = $stotal+$total;
		  	  

		  	  ?>

		  <tr class="" style="">
		    <td class="">
		      <img style="height: 100px;width: 150px;" src="images/cars/<?php echo $img ?>">
		    </td>
		    <td class="product-details">
		      <div class="product-title">
		<?php   
		$rowsxx =mysqli_query($con,"SELECT name FROM brands WHERE `id`='$brand' " ) or die(mysqli_error($con));
       while($rowxx=mysqli_fetch_array($rowsxx)){
        echo $rowxx['name']; } ?>
        <?php echo $proname ?>
        	

        </div>

		    </td>
		    <td class="product-price"><?php echo number_format($price) ?></td>
		    <td class="product-quantity">
		 <form action="" method="post">
		    <input style="padding: 5px;width: 50px;" type="number" name="qty<?php echo $n ?>" value="<?php echo $qty ?>">
		    <button type="submit" name="upqty<?php echo $n ?>" value="<?php echo $oid ?>" class="btn"><i class="icon-save"></i></button>
		</form>

		      <input class="form-control" style="max-width: 100px;display: none;"  type="number" value="<?php echo $qty ?>" min="1">
		    </td>
		    <td class="product-removal">
		    <form action="" method="post">
		      <button name="rem<?php echo $n ?>" value="<?php echo $oid ?>" class="remove-product btn btn-danger">
		        Remove
		      </button>
		  </form>
		    </td>
		    <td class="product-line-price"><?php echo number_format($total) ?></td>
		  </tr>

		  <?php $n++; } } ?>

		  <tr class="totals">
		  	<td colspan="4" ></td>
		  	<td>
		  		<label>Subtotal</label><br>
		  		<label style="display: none;">Tax (5%)</label>
		  		<label style="display: none;">Shipping</label><br>
				<label style="display: none;">Grand Total</label>


		  	</td>
		    <td class="totals-item">
		      
		      <div class="totals-value" id="cart-subtotal"><?php echo number_format($stotal) ?></div>
		      
		     <!-- <div class="totals-value" style="" id="cart-tax">3.60</div>
		      		      
		      <div class="totals-value" id="cart-shipping">150.00</div>
		      
		      <div class="totals-value" id="cart-total"><?php echo $stotal ?></div> -->
		    </td>
		  </tr>
		  <tr>
		  	<td colspan="5"></td>
		  	<td>
		  	<form action="confirm.php" method="POST" >
		      <button type="submit" name="confirm" class="checkout btn btn-info">Confirm Order</a>
		  </form>
		  </td>
		  </tr>
		  </tbody>
		 </table>	
		




			</div>


		<!-- Footer
			============================================= -->

			<?php 	include 'include/footer.php'; ?>

			
		</div><!-- #wrapper end -->


<script type="text/javascript">


    function wrt() {
       var y = document.getElementById("months").value;
        var z = document.getElementById("price").value;
        var x = +y * +z;

      document.getElementById('total').value = x ;
    }

    function wrtp() {
       var y = document.getElementById("months").value;
        var z = document.getElementById("price").value;
        y++;
        var x = +y * +z;

      document.getElementById('total').value = x ;
    }

    function wrtm() {
       var y = document.getElementById("months").value;
        var z = document.getElementById("price").value;
        y--;
        var x = +y * +z;

      document.getElementById('total').value = x ;
    }


  </script>


	</body>
	</html>
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

	<!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="admin/app-assets/css/app.css">
  <!-- END MODERN CSS-->
 <script src="card/vendors.min.js" type="text/javascript"></script>
  <script src="card/app-menu.js" type="text/javascript"></script>
  <script src="card/app.js" type="text/javascript"></script>




	<?php include 'include/head.php'; ?>
	<!-- Document Title
		============================================= -->
		<title>Rent a Car Website</title>

		<?php $link="account" ?>
		<style type="text/css">
			.current{
				background: #98483d;
				color:#fff;
				}.current a{
					color:#fff;
				}
			.oimg{
				max-width: 50px;
			}

			h4{
				margin-top: 30px;
				margin-bottom: 5px;
			}
			</style>

  <?php 


    if(isset($_GET['ter'])){
      $msg="Unsuccessful" ;

      $id=$_GET['ter'];
            $date= date("Y-m-d");
            $status='terminated';

            $desp='Terminated By User.';


      $data=mysqli_query($con,"UPDATE orders SET `days`='0',`total`='0',`datestart`='$date',`dateend`='$date',`desp`='$desp',`status`='$status' where `id`='$id'")or die( mysqli_error($con) );

    header("location:orders.php"); // Redirecting To Other Page



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


			<br>
			<div class="row" style="margin-right: 0px">

				<div class="col-md-1">
				</div>
			


				<div class="col-md-10">
		<?php if(!empty($_GET['id'])) {
			$id=$_GET['id'];
		 ?>
			<div class="card">
                <div class="card-header">
                  <h4 class="card-title">Order Detail:</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse">-</a></li>
                      <li><a data-action="reload">o</a></li>
                      <li><a data-action="expand">[]</a></li>
                      <li><a data-action="close">x</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
                    	<img src="images/<?php echo $sitelogo ?>" style="height: 100px;float: right;">

                    	<h2 style="margin:1px;">A1CARS</h2>
                    	<h3 style="margin-bottom: 1px">Order Details</h3>
                    	<h5>Date: 	<?php echo date('Y-m-d') ?></h5>
                     
                     				  	<?php 

		  	$rows =mysqli_query($con,"SELECT * FROM orders where id=$id" ) or die(mysqli_error($con));
		  	$n=0;
		  	$stotal=0;

		  	while($row=mysqli_fetch_array($rows)){
		  	  	
		  	  	$stotal=0;
		  	  $oid = $row['id']; 
		  	  $pid = $row['carid']; 
		  	  $ouserid = $row['userid']; 
		  	  $qty = $row['days']; 
		  	  $status = $row['status']; 
	  		  $paid = $row['paid'];
		  	    $price = $row['price'];  
		  	    $total = $qty*$price;
		  	    $stotal = $stotal+$total;

		  	  $datebook = $row['datebook']; 
		  	  $datestart = $row['datestart']; 
		  	  $dateend = $row['dateend']; 


		  	  $rowsx =mysqli_query($con,"SELECT * FROM car where id='$pid' " ) or die(mysqli_error($con));
		  	  while($rowx=mysqli_fetch_array($rowsx)){

		  	    $brand = $rowx['brand'];  
		  	    $proname = $rowx['name']; 
		  	    $img = $rowx['img0']; 
		  	  	}

		  	  $rowsx =mysqli_query($con,"SELECT * FROM users where id='$ouserid' " ) or die(mysqli_error($con));
		  	  while($rowx=mysqli_fetch_array($rowsx)){

		  	    $ousername = $rowx['username'];  
		  	    $oname = $rowx['name'];  
		  	    $oemail = $rowx['email']; 
		  	    $ophone = $rowx['phone']; 

		  	  	}
		  	  }
		  	  ?>

		  	  <table class="table table-hover">
		  	  	<tbody>

		<tr>
			<td colspan="4"> <h4>Order Detail:</h4>
		</tr>
		  	  		<tr>
		  	  				<td>Order ID: </td>
							  <td>
								<span style="text-decoration: underline;"><?php echo $oid ?></span>
							  </td>

		  	  				<td>Order Date: </td>
							  <td>
								<span style="text-decoration: underline;"><?php echo $datebook ?></span>
							  </td>
					</tr>

		<tr>
			<td colspan="4"> <h4>Car Details:</h4>
		</tr>
					<tr>
						<td> Car Name </td>
							  <td><a href="car.php?id=<?php echo $pid ?>">
							  	<?php   
		$rowsxx =mysqli_query($con,"SELECT name FROM brands WHERE `id`='$brand' " ) or die(mysqli_error($con));
       while($rowxx=mysqli_fetch_array($rowsxx)){
        echo $rowxx['name']; } ?>
        <?php echo $proname ?>
        	
        </a></td>
   			

					<td>Car Image: </td>
							  <td>

		      <img style="height: 50px;width: 80px;" src="images/cars/<?php echo $img ?>">

		  </td>
		</tr>
		<tr>
			<td colspan="4"> <h4>User Details:</h4>
		</tr>
		<tr>
			<td>User Full Name:</td>
							  <td style="text-transform: capitalize;"> <?php echo $oname ?> </td>
					

				<td>Username:</td>
							  <td> <?php echo $ousername ?> </td>
							</tr>
		<tr>
			<td>User Email:</td>
							  <td style="text-transform:;"> <?php echo $oemail ?> </td>
					

				<td>User Phone:</td>
							  <td> <?php echo $ophone ?> </td>
							</tr>

		<tr>
			<td colspan="4"> <h4>Order Status:</h4>
		</tr>


		<tr>
			<td>Order Status:</td>
							  <td style="text-transform: capitalize;"> <?php echo $status ?> </td>
					

				<td>Booking Date:</td>
							  <td> <?php echo $datebook ?> </td>
							</tr>
		<tr>
			<td>Starting Date:</td>
							  <td style="text-transform:;"> <?php echo $datestart ?> </td>
					

				<td>Ending Date:</td>
							  <td> <?php echo $dateend ?> </td>
							</tr>

		<tr>


			<td colspan="4"> <h4>Payment Details:</h4>
		</tr>

		<tr>
			<td>Totat Days: </td><td>  <?php echo ($qty) ?> </td>
			
			
			<td><td>

							  </tr>
		<tr>
			
			
			<td>Rent Per Day: </td><td> Rs. <?php echo number_format($price) ?>/- </td>
			<td><td>

							  </tr>
		<tr>
			<td>Total Dues: </td>
							  <td>Rs. <?php echo number_format($stotal) ?>/- </td>
			
			
			<td>Paid Dues:
							  <td>Rs. <?php echo number_format($paid) ?>/- </td>

							  </tr>

							  <tr>
							  	<td colspan="4"><center><h4>Payment Methods Avalible</h4></center></td>

	<?php   
		$rowsxx =mysqli_query($con,"SELECT * FROM payment " ) or die(mysqli_error($con));
       while($rowxx=mysqli_fetch_array($rowsxx)){

        $easypaisa =  $rowxx['easypaisa']; 
        $jazzcash =  $rowxx['jazzcash']; 
        $bank =  $rowxx['bank']; 

    } ?>


		<tr>
			<td>Easypaisa Deposit:</td>
							  <td style=""> <?php echo $easypaisa ?> </td>
					

				<td>JazzCash Deposit:</td>
							  <td> <?php echo $datebook ?> </td>
							</tr>
		<tr>
			<td>Bank Payment :</td>
							  <td style="text-transform:;"> <?php echo $bank ?> </td>
					

				<td>Cash by Hand:</td>
							  <td> Address: <?php echo $siteaddress ?> </td>
							</tr>

		<tr>






		  	  	</tbody>

		  	  </table>
		  	  <br>
		  	  <br>
		  	  <br>

                    </div>

                  </div>
                </div>
              </div>

          <?php } ?>


     
          <div style="float: right;">
						<h3>Account Balance: Rs. <?php include 'include/bal.php'; ?>/- </h3>
					</div>



					<label class="lead color">My Pending Orders:</label>

						<table id="pending" class="display" cellspacing="0" width="100%">
						  <thead>
							<tr>

							  <th>Order#</th>
							  <th>Car</th>
							  <th>Img</th>
							  <th>Price</th>
							  <th>Days</th>
							  <th>Total</th>
							  <th>Paid</th>
							  <th>Status</th>
							  <th>Date Book</th>
							  <th>Actions</th>
							</tr>
						  </thead>
						  <tbody>

						  	<?php 

		  	$rows =mysqli_query($con,"SELECT * FROM orders where status='pending' AND userid='$userid' LIMIT 10" ) or die(mysqli_error($con));
		  	$n=0;
		  	$stotal=0;

		  	while($row=mysqli_fetch_array($rows)){

		  	  $oid = $row['id']; 
		  	  $pid = $row['carid']; 
		  	  $qty = $row['days']; 
		  	  $status = $row['status']; 

		  	    $paid = $row['paid'];  
		  	    $datec = $row['datebook']; 


		  	  $rowsx =mysqli_query($con,"SELECT * FROM car where id='$pid' " ) or die(mysqli_error($con));
		  	  while($rowx=mysqli_fetch_array($rowsx)){

		  	  	 $stotal=0;
		  	    $price = $rowx['price'];  
		  	    $brand = $rowx['brand'];  
		  	    $proname = $rowx['name']; 
		  	    $img = $rowx['img0']; 
		  	    $total = $qty*$price;
		  	    $stotal = $stotal+$total;
		  	  

		  	  ?>
							<tr>
		  	  <a  href="orders.php?id=<?php echo $oid ?>">

							  <td>
								<a  href="orders.php?id=<?php echo $oid ?>"><h5 style="text-decoration: underline;"><?php echo $oid ?></h5></a>
							  </td>

							  <td><a href="car.php?id=<?php echo $pid ?>">
							  	<?php   
		$rowsxx =mysqli_query($con,"SELECT name FROM brands WHERE `id`='$brand' " ) or die(mysqli_error($con));
       while($rowxx=mysqli_fetch_array($rowsxx)){
        echo $rowxx['name']; } ?>
        <?php echo $proname ?>
        	
        </a></td>
							  <td>

		      <img style="height: 50px;width: 80px;" src="images/cars/<?php echo $img ?>">

		  </td>
							  <td>Rs. <?php echo number_format($price) ?>/- </td>
							  <td><?php echo number_format($qty) ?></td>


							  <td>Rs. <?php echo number_format($stotal) ?>/- </td>
							  <td>Rs. <?php echo number_format($paid) ?>/- </td>
							  <td style="text-transform: capitalize;"> <?php echo $status ?> </td>
							  <td> <?php echo $datec ?> </td>



							  <td> 
							  	<a class="btn btn-default" href="?id=<?php echo $oid ?>">View</a>

							  	<a class="btn " href="?ter=<?php echo $oid ?>">Withdraw</a>

							   </td>
						</a>

							</tr>

						<?php }}  ?>

						  </tbody>
						</table>


<br>
<br>
<br>
<br>




							<label class="lead color">My Ongoing Orders:</label>
							<br>
							<span>To Terminate the Ongoing Order, Kindly Contact Admin </span>
							<br>
							<br>
						<table id="finish" class="display" cellspacing="0" width="100%">
						  <thead>
							<tr>

							  <th>Order#</th>
							  <th>Car</th>
							  <th>Img</th>
							  <th>Price</th>
							  <th>Days</th>
							  <th>Total</th>
							  <th>Paid</th>
							  <th>Date Started</th>
							  <th>Date Completed</th>
							  <th>Actions</th>
							</tr>
						  </thead>
						  <tbody>

						  	<?php 

		  	$rows =mysqli_query($con,"SELECT * FROM orders where status='ongoing' AND userid='$userid' LIMIT 10" ) or die(mysqli_error($con));
		  	$n=0;
		  	$stotal=0;

		  	while($row=mysqli_fetch_array($rows)){

		  	  $oid = $row['id']; 
		  	  $pid = $row['carid']; 
		  	  $qty = $row['days']; 
		  	  $status = $row['status']; 

		  	    $paid = $row['paid'];  
		  	    
          $datebook = $row['datebook']; 
          $datestart = $row['datestart']; 
          $dateend = $row['dateend']; 

		  	  $rowsx =mysqli_query($con,"SELECT * FROM car where id='$pid' " ) or die(mysqli_error($con));
		  	  while($rowx=mysqli_fetch_array($rowsx)){

		  	  	 $stotal=0;
		  	    $price = $rowx['price'];  
		  	    $brand = $rowx['brand'];  
		  	    $proname = $rowx['name']; 
		  	    $img = $rowx['img0']; 
		  	    $total = $qty*$price;
		  	    $stotal = $stotal+$total;
		  	  

		  	  ?>
							<tr>
		  	  <a  href="orders.php?id=<?php echo $oid ?>">

							  <td>
								<a  href="orders.php?id=<?php echo $oid ?>"><h5 style="text-decoration: underline;"><?php echo $oid ?></h5></a>
							  </td>

							  <td><a href="car.php?id=<?php echo $pid ?>">
							  	<?php   
		$rowsxx =mysqli_query($con,"SELECT name FROM brands WHERE `id`='$brand' " ) or die(mysqli_error($con));
       while($rowxx=mysqli_fetch_array($rowsxx)){
        echo $rowxx['name']; } ?>
        <?php echo $proname ?>
        	
        </a></td>
							  <td>

		      <img style="height: 50px;width: 80px;" src="images/cars/<?php echo $img ?>">

		  </td>
							  <td>Rs. <?php echo number_format($price) ?>/- </td>
							  <td><?php echo number_format($qty) ?></td>


							  <td>Rs. <?php echo number_format($stotal) ?>/- </td>
							  <td>Rs. <?php echo number_format($paid) ?>/- </td>
							  <td style="text-transform: capitalize;"> <?php echo $datestart ?> </td>
							  <td> <?php echo $dateend ?> </td>



							  <td> 
							  	<a class="btn btn-default" href="?id=<?php echo $oid ?>">View</a>
							   </td>
						</a>

							</tr>

						<?php }}  ?>

						  </tbody>
						</table>


<br>
<br>
<br>
<br>
<br>




							<label class="lead color">My Terminated Orders:</label>

						<table id="ter" class="display" cellspacing="0" width="100%">
						  <thead>
							<tr>

							  <th>Order#</th>
							  <th>Car</th>
							  <th>Img</th>
							  <th>Price</th>
							  <th>Days</th>
							  <th>Total</th>
							  <th>Paid</th>
							  <th>Date Started</th>
							  <th>Date Completed</th>
							  <th>Actions</th>
							</tr>
						  </thead>
						  <tbody>

						  	<?php 

		  	$rows =mysqli_query($con,"SELECT * FROM orders where status='terminated' AND userid='$userid' LIMIT 10" ) or die(mysqli_error($con));
		  	$n=0;
		  	$stotal=0;

		  	while($row=mysqli_fetch_array($rows)){

		  	  $oid = $row['id']; 
		  	  $pid = $row['carid']; 
		  	  $qty = $row['days']; 
		  	  $status = $row['status']; 

		  	    $paid = $row['paid'];  

          $datebook = $row['datebook']; 
          $datestart = $row['datestart']; 
          $dateend = $row['dateend']; 




		  	  $rowsx =mysqli_query($con,"SELECT * FROM car where id='$pid' " ) or die(mysqli_error($con));
		  	  while($rowx=mysqli_fetch_array($rowsx)){

		  	  	 $stotal=0;
		  	    $price = $rowx['price'];  
		  	    $brand = $rowx['brand'];  
		  	    $proname = $rowx['name']; 
		  	    $img = $rowx['img0']; 
		  	    $total = $qty*$price;
		  	    $stotal = $stotal+$total;
		  	  

		  	  ?>
							<tr>
		  	  <a  href="orders.php?id=<?php echo $oid ?>">

							  <td>
								<a  href="orders.php?id=<?php echo $oid ?>"><h5 style="text-decoration: underline;"><?php echo $oid ?></h5></a>
							  </td>

							  <td><a href="car.php?id=<?php echo $pid ?>">
							  	<?php   
		$rowsxx =mysqli_query($con,"SELECT name FROM brands WHERE `id`='$brand' " ) or die(mysqli_error($con));
       while($rowxx=mysqli_fetch_array($rowsxx)){
        echo $rowxx['name']; } ?>
        <?php echo $proname ?>
        	
        </a></td>
							  <td>

		      <img style="height: 50px;width: 80px;" src="images/cars/<?php echo $img ?>">

		  </td>
							  <td>Rs. <?php echo number_format($price) ?>/- </td>
							  <td><?php echo number_format($qty) ?></td>


							  <td>Rs. <?php echo number_format($stotal) ?>/- </td>
							  <td>Rs. <?php echo number_format($paid) ?>/- </td>
							  <td style="text-transform: capitalize;"> <?php echo $datestart ?> </td>
							  <td> <?php echo $dateend ?> </td>



							  <td> 
							  	<a class="btn btn-default" href="?id=<?php echo $oid ?>">View</a>


							   </td>
						</a>

							</tr>

						<?php }}  ?>

						  </tbody>
						</table>


<br>
<br>
<br>
<br>

<br>
<br>

						</div>
					</div>
				</div>

			</div>
			





		<!-- Footer
			============================================= -->

			<?php 	include 'include/footer2.php'; ?>

		
<script type="text/javascript">
	
	$(document).ready(function() {
    $('#pending').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
	
</script>	


<script type="text/javascript">
	
	$(document).ready(function() {
    $('#finish').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
	
</script>
	

<script type="text/javascript">
	
	$(document).ready(function() {
    $('#ter').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
	
</script>
	
		</div><!-- #wrapper end -->

	</body>
	</html>
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
			</style>

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
				<div class="col-md-3">
					<?php include 'include/sidebar.php'; ?>

				</div>

				<div class="col-md-7">

<!--
					<div class="" style="">
						<div class="clear"></div>
						<br>
						<label class="lead color">Recent Cars Booked:</label>
						<div class="float-right"> <a href="">View All >> </a></div>


						 Portfolio Items

							<div id="portfolio" class="portfolio portfolio-3 grid-container clearfix">


								<article class="portfolio-item cf-sedan" style="padding-bottom: 40px">
									<div class="portfolio-image">
										<a href="car.php">
											<img src="images/cars/1.jpg" alt="Open Imagination">


										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="car.php">Ford Mustang - White</a></h3>
										Date: <label class="color"> 11-10-2019 - 10-02-2020</label>

									</div>


								</article>


								<article class="portfolio-item cf-suv" style="padding-bottom: 40px">
									<div class="portfolio-image">
										<a href="car.php">
											<img src="images/cars/2.jpg" alt="Open Imagination">

										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="car.php">Chevrolet Traverse</a></h3>
										Date: <label class="color"> 11-10-2019 - 10-11-2019</label>
									</div>


								</article>


								<article class="portfolio-item cf-cabriolet" style="padding-bottom: 40px">
									<div class="portfolio-image">
										<a href="car.php">
											<img src="images/cars/3.jpg" alt="Open Imagination">

										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="car.php">Audi 2018 S5 Cabriolet</a></h3>
										Date: <label class="color"> 01-11-2019 - 01-05-2020</label>

									</div>

								</article>



							</div>  Filter Car lists end -->

							<br>

							<label class="lead color"> Recent Orders:</label>
						<div class="float-right"> <a href="orders.php">View All >> </a></div>

							<table class="table table-bordered table-striped">
						  <thead>
							<tr>

							  <th>Order#</th>
							  <th>Car</th>
							  <th>Img</th>
							  <th>Total</th>
							  <th>Paid</th>
							  <th>Status</th>
							  <th>Date</th>
							</tr>
						  </thead>
						  <tbody>

						  	<?php 

		  	$rows =mysqli_query($con,"SELECT * FROM orders where status!='cart' AND userid='$userid' LIMIT 10" ) or die(mysqli_error($con));
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
							  <td>Rs. <?php echo number_format($stotal) ?>/- </td>
							  <td>Rs. <?php echo number_format($paid) ?>/- </td>
							  <td style="text-transform: capitalize;"> <?php echo $status ?> </td>
							  <td> <?php echo $datec ?> </td>
							</tr>


						<?php }}  ?>

						  </tbody>
						</table>

						<h3>Account Balance: Rs. <?php include 'include/bal.php'; ?>/- </h3>


						</div>
					</div>
				</div>

			</div>
			





		<!-- Footer
			============================================= -->

			<?php 	include 'include/footer.php'; ?>

			
		</div><!-- #wrapper end -->

	</body>
	</html>
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


					<div class="" style="">
						<div class="clear"></div>
						<br>
						<label class="lead color">Recent Cars Booked:</label>
						<div class="float-right"> <a href="">View All >> </a></div>


						<!-- Portfolio Items
							============================================= -->
							<div id="portfolio" class="portfolio portfolio-3 grid-container clearfix">

								<!-- Car 1 -->
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

								<!-- Car 2 -->
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

								<!-- Car 3 -->
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



							</div> <!-- Filter Car lists end -->

							<br>

							<label class="lead color"> Upcoming Payment Invoices:</label>
						<div class="float-right"> <a href="">View All >> </a></div>

							<table class="table table-bordered table-striped">
						  <thead>
							<tr>
							  <th>Invoice#</th>
							  <th>Order#</th>
							  <th>Img</th>
							  <th>Car</th>
							  <th>Due Date</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>
								<code>9842</code>
							  </td>
							  <td>
							  	<label>OS-7665</label>
							  </td>
							  <td><img src="images/cars/2.jpg" class="oimg"></td>
							  <td><a href="car.php">Honda RV Cabriolet</a></td>
							  <td> 01-05-2019 </td>
							</tr>

							<tr>
							  <td>
								<code>9842</code>
							  </td>
							  <td>
							  	<label>RD-34554</label>
							  </td>
							  <td><img src="images/cars/5.jpg" class="oimg"></td>
							  <td><a href="car.php">Audi S5</a></td>
							  <td> 05-11-2020 </td>
							</tr>



						  </tbody>
						</table>


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
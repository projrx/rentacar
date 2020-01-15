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

					<label class="lead color"> Upcoming Payment Invoices:</label>

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

							<tr>
							  <td>
								<code>2334</code>
							  </td>
							  <td>
							  	<label>DS-8876</label>
							  </td>
							  <td><img src="images/cars/5.jpg" class="oimg"></td>
							  <td><a href="car.php">Audi Traverse </a></td>
							  <td> 05-05-2020 </td>
							</tr>

							<tr>
							  <td>
								<code>9842</code>
							  </td>
							  <td>
							  	<label>PS-34554</label>
							  </td>
							  <td><img src="images/cars/7.jpg" class="oimg"></td>
							  <td><a href="car.php">Traverse Cabriolet</a></td>
							  <td> 05-05-2020 </td>
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
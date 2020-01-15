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

			.noti >ul > li {
				margin:20px;
				border-top-width: 1px !important;
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


				


						<div class="col-12">

							<div class="row">
							<div class="col-10">

							<img src="images/icons/avatar.jpg" class="alignleft img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">

							<div class="heading-block noborder">
								<h3>FirstName Last</h3>
								<span>@Username</span>
							</div>
							</div>
							<div class="col-2 lead">
								<i class="icon-pencil"></i> <a href="editprofile.php"> Edit Profile </a>
							</div>
							</div>

							<div class="clear"></div>
						

							<table class="table">
								<tr>
									<td> <h4> Email: </h4> </td><td> <h4 class="lead">rentacar@gmail.com</h4></td>
								</tr>
								<tr>
									<td> <h4> Phone: </h4> </td><td> <h4 class="lead">+92 300 1232345</h4></td>
								</tr>

								<tr> 
									<td><h4> Date of Birth: </h4></td><td><h4 class="lead">11-09-1996</h4></td>
								</tr>

								<tr>
									<td><h4> Driving Lisence: </h4></td><td><img src="images/dl.jpg"></td>
								</tr>
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
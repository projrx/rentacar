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


					<div class="" style="">
						<div class="clear"></div>
						<br>
						<label class="lead color">Notifications Pending:</label>
						<div class="float-right"> <a href="">Clear All >> </a></div>

						<div class="noti">

					<ul class="list-group">
						<li class="list-group-item">
							<lable> Fill the Profile at: </lable>  <a href="profile.php" >Profile Page</a>

							<span class="badge float-right" style="margin-top: 3px;">x</span>

						</li>

						<li class="list-group-item">
							<lable> More Car to Rent will be avaliale this Saturday Afternoon</lable>

							<span class="badge float-right" style="margin-top: 3px;">x</span>

						</li>
						
					</ul>
				</div>

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
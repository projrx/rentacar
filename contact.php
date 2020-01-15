<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include 'include/head.php'; ?>
	<!-- Document Title
	============================================= -->
	<title>Rent a Car Website</title>

	<?php $link="blank" ?>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php 	include 'include/header.php'; ?>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Contact Form
					============================================= -->
					<div class="col-12">

						<div class="fancy-title title-dotted-border">
							<h3>Contact Us:</h3>
						</div>

						<div class="form-widget">

							<div class="form-result"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Phone</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_two_third">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Wordpress">Wordpress</option>
										<option value="PHP / MySQL">PHP / MySQL</option>
										<option value="HTML5 / CSS3">HTML5 / CSS3</option>
										<option value="Graphic Design">Graphic Design</option>
									</select>
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
								</div>

								<input type="hidden" name="prefix" value="template-contactform-">

							</form>
						</div>

					</div><!-- Contact Form End -->

					<!-- Google Map
					============================================= 
					<div class="col_half col_last">

						<section id="google-map" class="gmap" style="height: 410px;"></section>

					</div>--> <!-- Google Map End -->

					<div class="clear"></div>

					<!-- Contact Info
					============================================= -->
					<div class="row clear-bottommargin">

						<div class="col-lg-3 col-md-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-map-marker2"></i></a>
								</div>
								<h3>Address<span class="subtitle">Our Street Address, Lahore</span></h3>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-phone3"></i></a>
								</div>
								<h3>Call Us<span class="subtitle">(+92) 300 237890</span></h3>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-email"></i></a>
								</div>
								<h3>Email<span class="subtitle">info@rentacars.com</span></h3>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-facebook"></i></a>
								</div>
								<h3>Visit Facebook<span class="subtitle">RentACars</span></h3>
							</div>
						</div>

					</div><!-- Contact Info End -->

				</div>

			</div>

		</section><!-- #content end -->







		<!-- Footer
		============================================= -->
	
		<?php 	include 'include/footer.php'; ?>

			
	</div><!-- #wrapper end -->

</body>
</html>
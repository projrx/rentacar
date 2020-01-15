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
			<div class="container">

				<div class="text">
					<br><Br>

					<div class="row">
						<div class="col-6">


								<!-- Product Single - Gallery
									============================================= -->
									<div class="product-image">
										<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
											<div class="flexslider">
												<div class="slider-wrap" data-lightbox="gallery">

													<div class="slide" data-thumb="images/cars/3.jpg"><a href="images/cars/3.jpg" title="Car - Front View" data-lightbox="gallery-item"><img src="images/cars/3.jpg" alt="Pink Printed Dress"></a></div>

													<div class="slide" data-thumb="images/cars/1.jpg"><a href="images/cars/1.jpg" title="Car - Side View" data-lightbox="gallery-item"><img src="images/cars/1.jpg" alt="Pink Printed Dress"></a></div>

													<div class="slide" data-thumb="images/cars/2.jpg"><a href="images/cars/2.jpg" title="cars - Back View" data-lightbox="gallery-item"><img src="images/cars/2.jpg" alt="Pink Printed Dress"></a></div>
												</div>
											</div>
										</div>
										<div class="sale-flash">Best in Class!</div>
									</div><!-- Product Single - Gallery End -->

								</div>

								<div class="col-6">

								<!-- Product Single - Price
									============================================= -->
									<div class="h4">Audi 2016 S2 Cabriolet</div>
									

									<div class="product-price"><ins>Rs. 25,000 /- Per Month</ins></div>

							
									<hr>
									<div class="clear"></div>

									<div class="row no-gutters car-p-features font-primary clearfix" style="font-size:18px;">

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> 25000 CC</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> Hybrid</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> Automatic</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 1,500 KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2018</span></div>
								</div>

								<hr>


								<!-- Product Single - Quantity & Cart Button
									============================================= -->
									<form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
										<div class="row">
										<div class="col-6">
										<h5>Book This Car For:</h5>
										<div class="quantity clearfix">
											<input onclick="wrtm()" type="button" value="-" class="minus">
											<input onchange="wrt()"  type="number"  id="months" name="months" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />

											<input onclick="wrtp()"  type="button" value="+" class="plus">
											 &nbsp;<span style="font-size: 22px;    vertical-align: text-top;"> Months </span>

                              <input onkeyup="wrt()" type="number" class="form-control" id="price"  name="newlec" required="" style="display: none;" value="25000">


										</div>
										</div>
										<div class="col-6">
										<h5>Total:</h5>
										<span style="font-size: 25px">
                              Rs. <input id="total" type="text" style="    border: none; max-width: 100px;" name="newtotal" value="25000" required=""> 
                          </span>

										</div>
										</div>


										<br>

										<br>
										<button type="submit" class="add-to-cart button nomargin">Book Now</button>
									</form><!-- Product Single - Quantity & Cart Button End -->

									<div class="clear"></div>
									<div class="line"></div>


									</div><!-- Product Single - Share End -->

								</div>
							</div>

				</div>
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
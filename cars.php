<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include 'include/head.php'; ?>
	<!-- Document Title
	============================================= -->
	<title>Rent a Car Website</title>

	<?php $link="cars" ?>

	<style type="text/css">
		label{
			color: #fff
		}

		input[type="radio"] {
			    height: 20px;
    width: 20px;
    margin-left: 10px;
    vertical-align: middle;
    margin-right: 5px;
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

		<div class="text-center">
			
			<div class="row">
				<div class="col-4" style=" position: fixed">
					<div class="card bgcolor " style="height: 100%;">
						<div class="card-body" style="">
							<h3 class="text-white">Search Your Car:</h3>
							<form action="#" method="post" class="nobottommargin">
								<div class="row ">

									<div class="col-12 mt-3">
										<label class="text-white h5" for="">All Brands:</label>
										<select class="selectpicker form-control customjs" title="Select Brand"  data-size="7" data-live-search="true" multiple data-live-search="true" style="width:100%;">
											<optgroup label="All Brands">
												<option value="Audi">Audi</option>
												<option value="BMW">BMW</option>
												<option value="Ferrari">Ferrari</option>
												<option value="Ford">Ford</option>
												<option value="Honda">Honda</option>
												<option value="Mercedes-Benz">Mercedes-Benz</option>
												<option value="Manza">Manza</option>
												<option value="Porsche">Porsche</option>
												<option value="Tayota">Tayota</option>
											</optgroup>
										</select>
										<hr>
									</div>
									<hr>
									<div class="col-12 mt-3">
										<label class="text-white h5" for="">Transmission:</label>
										<br>
										<div style="">
										<input type="radio" checked="" name="trans"><label> Any </label>
										<input type="radio" name="trans"><label> Automatic </label>
										<input type="radio" name="trans"><label> Manual </label>
										</div>
										<hr>

									</div>

									<div class="col-12 mt-3">
										<label class="text-white h5" for="">Fuel:</label>
										<br>
										<div style="">
										<input type="radio" checked="" name="fuel"><label> Any </label>
										<input type="radio" name="fuel"><label> Petrol </label>
										<input type="radio" name="fuel"><label> Gas </label>
										<input type="radio" name="fuel"><label> Diesel </label>
										<input type="radio" name="fuel"><label> Hybird </label>
										</div>
										<hr>
									</div>
									

									<div class="col-12 mt-3">
										<label class="text-white h5" for="">Price:</label>
										<br>
										<div style="">
										<input type="radio" checked="" name="price"><label> Low to High </label>
										<input type="radio" checked="" name="price"><label> High to Low </label>


										</div>
										<hr>
									</div>
									



									<div class="col-12 mt-4">
										<button class="button button-3d button-rounded button-white button-light button-large btn-block m-0">Search</button>
									</div>
								</div>
							</form>

									<br>
									<br>
									<br>
									<br>
						</div>
					</div>

				</div>
				<div class="col-4" style="">
				</div>
				<div class="col-8" style="">
						<div class="clear"></div>
						<br>
						<!-- Portfolio Filter
						============================================= -->
						<ul class="portfolio-filter style-2 clearfix" data-container="#portfolio" style="width: 100%">
							<li><a href="#" data-filter=".cf-cuv"><i class="icon-car-cuv"></i><span> Cuv</span></a></li>
							<li><a href="#" data-filter=".cf-sedan"><i class="icon-car-sedan"></i><span> Sedan</span></a></li>
							<li><a href="#" data-filter=".cf-supercar"><i class="icon-car-supercar"></i><span> Supercar</span></a></li>
							<li><a href="#" data-filter=".cf-hatchback"><i class="icon-car-hatchback"></i><span> Hatchback</span></a></li>
							<li><a href="#" data-filter=".cf-cabriolet"><i class="icon-car-cabriolet"></i><span> Cabriolet</span></a></li>
							<!-- Show All Button -->
							 <li class="fright activeFilter"><a class="button button-small button-rounded button-reset" href="#" data-filter="*">Show All</a></li>
						</ul> <!-- #portfolio-filter end -->

						<div class="clear"></div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio portfolio-3 grid-container clearfix" data-layout="fitRows">

							<!-- Car 1 -->
							<article class="portfolio-item cf-sedan" style="padding-bottom: 40px">
								<div class="portfolio-image">
									<a href="car.php">
										<img src="images/cars/1.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">Rs. 25,000 +</span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="car.php">Ford Mustang - White</a></h3>
									
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> 20000 CC</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> Petrol</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> Automatic</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 2,000 KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2015</span></div>
								</div>
							</article>

							<!-- Car 2 -->
							<article class="portfolio-item cf-suv" style="padding-bottom: 40px">
								<div class="portfolio-image">
									<a href="car.php">
										<img src="images/cars/2.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">Rs. 35,000 + </span>
											
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="car.php">Chevrolet Brown Traverse</a></h3>

								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> 25000 CC</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> Diesel</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 10kmpl</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> Automatic</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 1,000 KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2016</span></div>
								</div>
							</article>

							<!-- Car 3 -->
							<article class="portfolio-item cf-cabriolet" style="padding-bottom: 40px">
								<div class="portfolio-image">
									<a href="car.php">
										<img src="images/cars/3.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">Rs. 22,000 + </span>
											
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="car.php">Audi 2018 S5 Cabriolet</a></h3>
									
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> 15000 CC</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> Hybrid</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 25kmpl</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> Automatic</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 2,500 KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2017</span></div>
								</div>

							</article>

							<!-- Car 4 -->
							<article class="portfolio-item cf-cuv">
								<div class="portfolio-image">
									<a href="car.php">
										<img src="images/cars/4.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">Rs. 25,000 + </span>
											
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="car.php">BMW 4 Series</a></h3>
								
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> 25000 CC</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> Diesel</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> Manual</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 2,000 KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2018</span></div>
								</div>
							</article>

							<!-- Car 5 -->
							<article class="portfolio-item cf-supercar">
								<div class="portfolio-image">
									<a href="car.php">
										<img src="images/cars/5.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">Rs. 30,500 + </span>
											
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="car.php">2018 LEXUS IS 200T </a></h3>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> 45000 CC</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> Petrol</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 35kmpl</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> Automatic</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 1,500 KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2018</span></div>
								</div>
							</article>


							<!-- Car 3 -->
							<article class="portfolio-item cf-cabriolet" style="padding-bottom: 40px">
								<div class="portfolio-image">
									<a href="car.php">
										<img src="images/cars/3.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">Rs. 22,000 + </span>
											
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="car.php">Audi 2016 S2 Cabriolet</a></h3>
									
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> 25000 CC</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> Hybrid</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> Automatic</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 1,500 KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2018</span></div>
								</div>

							</article>

							<!-- Car 4 -->
							<article class="portfolio-item cf-cuv">
								<div class="portfolio-image">
									<a href="car.php">
										<img src="images/cars/4.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">Rs. 25,000 + </span>
											
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="car.php">BMW 3 Series, ABS</a></h3>
								
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> 30000 CC</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> Diesel</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 25kmpl</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> Manual</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 1,000 KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2016</span></div>
								</div>
							</article>

							<!-- Car 5 -->
							<article class="portfolio-item cf-supercar">
								<div class="portfolio-image">
									<a href="car.php">
										<img src="images/cars/5.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">Rs. 30,500 + </span>
											
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="car.php">2016 LEXUS IS 200T FSPORT</a></h3>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> 35000 CC</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> Petrol</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 25kmpl</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> Automatic</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 2,500 KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2016</span></div>
								</div>
							</article>

							<!-- Car 6 -->
							<article class="portfolio-item cf-hatchback">
								<div class="portfolio-image">
									<a href="car.php">
										<img src="images/cars/6.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">Rs. 32,000 + </span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="car.php">Chevrolet T430 Hatchback</a></h3>
									
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> 15000 CC</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> Petrol</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 10kmpl</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> Manual</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 2,500 KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2017</span></div>
								</div>
							</article>

						</div> <!-- Filter Car lists end -->

						<br><br>

				</div>
			</div>








		<!-- Footer
		============================================= -->
	
		<?php 	include 'include/footer.php'; ?>

			
	</div><!-- #wrapper end -->

</body>
</html>
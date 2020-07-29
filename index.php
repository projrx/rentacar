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

	<?php $link="home" ?>

	<style type="text/css">
		.blogo{
			max-width: 80px;
		}
		[class^="icon-"]{

			font-size: 15px;
		}

		input[type="radio"] {
			    height: 20px;
    width: 20px;
    margin-left: 15px;
    vertical-align: middle;
    margin-right: 10px;
	}



		label{
			color: #000;
			font-size: 12px;
		}

		h6, .h6 {
    font-size: 1rem;
    color: #800e00;
    margin-top: 20px;
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
<style type="text/css">
	.slider-wrap, .flex-control-nav, .flex-direction-nav {
    margin: 0;
    padding: 0;
    list-style: none;
    border: none;
    display: none;
}

</style>

		<!-- Content
		============================================= -->
			<section id="slider" class="">

			<div class=" clearfix">

			<div class="fslider" data-easing="easeInQuad">
					<div class="flexslider">
						<div class="slider-wrap">

      <?php

      $rows =mysqli_query($con,"SELECT * FROM slider ORDER BY ordr" ) or die(mysqli_error($con));
      $n=0;

      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
        $name = $row['name']; 
        $img = $row['img']; 
        $ordr = $row['ordr']; 
        ?>
							<div class="slide" data-thumb="images/slider/1.jpg">
								<a href="#">
									<img src="images/slider/<?php echo $img ?>" alt="Slide 2">
									<div class="flex-caption  slider-caption-top-left" style="padding: 20px">
										<?php echo $name ?>
									</div>
								</a>
							</div>

						<?php } ?>

						</div>
					</div>
				</div>

			</div>

		</section>




 <?php

    $rows =mysqli_query($con,"SELECT * FROM home where id=1 " ) or die(mysqli_error($con));
    

    while($row=mysqli_fetch_array($rows)){


      $topdesp = $row['topdesp'];
      $bpost = $row['post'];
      $bimg = $row['img'];

    }
      ?>


				<div class="section topmargin-lg">
					<div class="container clearfix">

						<div class="row">
							<div class="col-md-6">

					<?php echo $bpost ?>

					</div>
							<div class="col-md-6">
								<img src="images/home/<?php echo $bimg ?>">
							</div>
					</div>
				</div>
			</div>



	<div class="container">
				<br>
					<div class="fancy-title title-center title-dotted-border">
						<h4>Search More Cars by Brands</h4>
					</div>

					<div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="2" data-items-sm="4" data-items-lg="5" data-items-xl="7">

 <?php

      $rows =mysqli_query($con,"SELECT * FROM brands ORDER BY ordr" ) or die(mysqli_error($con));
      $n=0;

      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
        $name = $row['name']; 
        $img = $row['img']; 
        $ordr = $row['ordr']; 
        ?>

						<div class="oc-item">
							<a href="cars.php"><img class="blogo" src="images/brands/<?php echo $img ?>" alt="Image 1"></a>
						</div>

					<?php } ?>



					</div>


				</div>
			</div>

<style type="text/css">
	.phonevid{
		position: absolute;
	}

.kSecPg {
    display: none;
    position: absolute;
    z-index: 1;
    top: 130px;
    left: 194px;
    height: 425px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(164, 164, 165);
    border-image: initial;
}


@media (min-width: 1200px){
.kSecPg {
	top: 130px;
    left: 195px;
    height: 424px;
}
}
@media (min-width: 992px){
.kSecPg {
    display: block;
}
}

</style>

<div class="container">
<section class="styles__FeaturesStyles-sc-998xh6-3 iHwMhM align-items-center row">
	<div class="col-md-3" id="features-left">
		<li class="styles__Feature-sc-998xh6-2 cxrQye"><h5 class="sc-qYhTA jGcxmv mb-3">One monthly payment</h5><p class="sc-pJwpB bIowUB mb-4">We get you a car with maintenance &amp; breakdown cover included for a flat monthly price. If you want insurance, we do that too.</p></li><li class="styles__Feature-sc-998xh6-2 cxrQye"><h5 class="sc-qYhTA jGcxmv mb-3">Flexibility</h5><p class="sc-pJwpB bIowUB mb-4">Take a car for 1-24 months. Cancel, extend or swap as your life changes.</p>
		</li>
	</div>
	<div id="features-phone" class="col-md-6">
		<span class=" lazy-load-image-background blur lazy-load-image-loaded" style="color: transparent; display: inline-block;">
		<img src="images/iphone_mockup.png?w=600&amp;auto=compress%2Cformat" sizes="(min-width: 992px) 50vw" alt="showing drover app" style="max-width: 600px;">
		</span>
			<video autoplay="" loop="" playsinline="" class="kSecPg"><source src="https://production-drover-public-assets.joindrover.com/public/static/media/phoneAnimation.1807fd2f.mp4" type="video/mp4">
			</video>
	</div>
		<div class="col-md-3" id="features-right">
			<li class="styles__Feature-sc-998xh6-2 cxrQye"><h5 class="sc-qYhTA jGcxmv mb-3">Completely Online</h5><p class="sc-pJwpB bIowUB mb-4">Get your car without leaving your living room. Our fully online process makes getting a car a breeze.</p></li><li class="styles__Feature-sc-998xh6-2 cxrQye"><h5 class="sc-qYhTA jGcxmv mb-3">Modern car ownership</h5><p class="sc-pJwpB bIowUB mb-4">The joy of having your perfect car, without the downpayment, admin and hidden costs that come with it.</p>
			</li>
		</div>
	</section>




<div style="border: 1px solid #f6f6f6;    padding: 0px 15px;    background: #f3f3f3;    overflow: hidden;    border-radius: 10px; box-shadow: 5px 5px 3px #e4e4e4;">
	<div class="row " style="padding: 10px; background:url('images/homebg.png'); background-size: cover; ">
		<div class="col-md-8">
			<br>
			<?php echo $topdesp ?>
		</div>
		<div class="col-md-4">
			<img src="https://drover.imgix.net/electric_cars/hp_car.png?w=373&amp;auto=compress%2Cformat" sizes="373px" alt="Electric vehicle" style="max-width: 373px;">
		</div>

	</div>

</div>

</div>




	<style type="text/css">
		.subtitle{
			font-size: 12px;
		}
	</style>

		<section id="content">

			<div class="content-wrap">

				<br><br>
				<div class="container clearfix">

					<div class="col_one_fourth nobottommargin">
						<div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
							<div class="fbox-icon">
								<a href="#"><i class="i-alt noborder icon-car"></i></a>
							</div>
							<h3>Best in Class Cars<span class="subtitle">Start your Driving today</span></h3>
						</div>
					</div>

					<div class="col_one_fourth nobottommargin">
						<div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
							<div class="fbox-icon">
								<a href="#"><i class="i-alt noborder icon-wallet"></i></a>
							</div>
							<h3>Easy Payments<span class="subtitle">More Effective Support</span></h3>
						</div>
					</div>

					<div class="col_one_fourth nobottommargin">
						<div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
							<div class="fbox-icon">
								<a href="#"><i class="i-alt noborder icon-megaphone"></i></a>
							</div>
							<h3>Notifications<span class="subtitle">Informative Dashboard</span></h3>
						</div>
					</div>

					<div class="col_one_fourth nobottommargin col_last">
						<div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
							<div class="fbox-icon">
								<a href="#"><i class="i-alt noborder icon-user"></i></a>
							</div>
							<h3>Account Managment<span class="subtitle">Your Account Here.</span></h3>
						</div>
					</div>

				</div>

<br>
<br>
<hr>

<style type="text/css">
	.carcard{
		background: #e6e6e6;
    padding: 15px;
    border-radius: 10px;
	}
	.entry:after {
    content: '';
    position: relative;
    height: 2px;
    margin-top: 0px;
    background-color: #F5F5F5;
    display: none;
}
.cardsbg{
	background: url('images/cardsbg.png');
	background-size: contain;
	background-repeat: no-repeat;
}
.entry-image{
	margin-bottom: 0px;
}
</style>
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="title">
						<h3> Featured Avaliable Cars: </h3>
					</div>

					<div class="row">
					<div class="col-md-8 cardsbg">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container grid-2 clearfix" data-layout="fitRows">


						      <?php

      $rows =mysqli_query($con,"SELECT * FROM car WHERE feat=1 ORDER BY id desc LIMIT 4 " ) or die(mysqli_error($con));
      $n=0;
      while($row=mysqli_fetch_array($rows)){


        $id = $row['id']; 
        $name = $row['name']; 
        $brand = $row['brand']; 
        $model = $row['model']; 
        $img = $row['img0']; 
        $price = $row['price']; 
        $book = $row['book']; 
        $feat = $row['feat']; 
        $datec = $row['datec']; 

        $engine = $row['engine']; 
        $enginec = $row['enginec']; 
        $fuel = $row['fuel']; 
        $millage = $row['millage']; 
        $trans = $row['trans']; 
        $gears = $row['gears']; 
        $dist = $row['dist']; 


        ?>

						<div class="entry clearfix">
							<div class="carcard">
							<div class="entry-image">
								<a href="images/cars/<?php echo $img ?>" data-lightbox="image"><img class="image_fade" src="images/cars/<?php echo $img ?>" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<?php   $rowsx =mysqli_query($con,"SELECT name FROM brands WHERE id=$brand LIMIT 1" ) or die(mysqli_error($con));
       while($rowx=mysqli_fetch_array($rowsx)){
        echo $rowx['name']; } ?>
								<h2><a href="car.php?id=<?php echo $id ?>"><?php echo $name ?></a></h2>
							</div>
							<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> <?php echo $engine ?> CC</span></div>

									<div style="text-transform: capitalize;" class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> <?php echo $fuel ?></span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> <?php echo $millage ?>kmpl</span></div>

									<div style="text-transform: capitalize;" class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> <?php echo $trans ?></span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> <?php echo number_format($dist) ?> KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> <?php echo $model ?></span></div>
								</div>
							</div>
						</div>

					<?php } ?>




					</div><!-- #posts end -->
				</div>
					<div class="col-md-4 text-center">
						<br>
						<br>
						<br>
						<h4 class="sc-qQlgh kIdLpQ">We are taking the frustration out of choosing, paying for and<b>&nbsp;owning a car.</b></h4>

						<Br>
						<h4 class="sc-qQlgh kIdLpQ mb-2">Quality and style</h4>
						<br>
						<p class="sc-pJwpB bIowUB my-2">All of our cars are vetted and maintained for total peace of mind. Choose anything from a hatchback to an SUV from the comfort of your own home. 
							<br>
						Choose anything from a hatchback to an SUV from the comfort of your own home. All of our cars are vetted and maintained for total peace of mind. </p>
						<br>
						<br><center><a href="cars.php" class="button button-xlarge button-rounded" style="color: #fff !important">View More Cars </a></center>
					</div>
			</div>

					



				</div>

			</div>

		</section>
		<br>

		
				<div class="text-center"> <h3>Or Customize you Rides as want... </h3></div>

				<!-- Moving car on scroll
				============================================= -->
				<div class="section clearfix" style="padding: 10px 0; background: #fafafa">
					<div class="row">
							<div class="col-lg-6">

					<div class="running-car topmargin-lg">
						<img class="car" src="images/home/car.jpg" alt="">
						<img class="wheel" src="images/home/car-tier.png" alt="">
					</div>
				</div>
							<div class="col-lg-5">

					<div class="container clearfix">
						<div class="row clearfix" style="position: relative;">
							<div class="">
							<form action="cars.php" method="GET">
								<div class="row ">
									<div class="col-12 ">
										<label class="h6" for="">Transmission:</label>
										<br>
										<div style="">
										<input type="radio" <?php if(!empty($_GET['trans'])) if ($_GET['trans'] == '%') echo "checked"; ?> name="trans" value="%"><label> Any </label>
										<input type="radio" <?php if(!empty($_GET['trans'])) if ($_GET['trans'] == 'auto') echo "checked"; ?> name="trans" value="auto"><label> Automatic </label>
										<input type="radio" <?php if(!empty($_GET['trans'])) if ($_GET['trans'] == 'manual') echo "checked"; ?> name="trans" value="manual"><label> Manual </label>
										</div>
										<hr>

									</div>

									<div class="col-12 ">
										<label class=" h6" for="">Fuel:</label>
										<div style="">
										<input type="radio" <?php if(!empty($_GET['fuel'])) if ($_GET['fuel'] == '%') echo "checked"; ?> name="fuel" value="%"><label> Any </label>
										<input type="radio"  <?php if(!empty($_GET['fuel'])) if ($_GET['fuel'] == 'petrol') echo "checked"; ?> name="fuel" value="petrol"><label> Petrol </label>

										<input type="radio" <?php if(!empty($_GET['fuel'])) if ($_GET['fuel'] == 'cng') echo "checked"; ?> name="fuel" value="cng"><label> CNG </label>
										
										<input type="radio"  <?php if(!empty($_GET['fuel'])) if ($_GET['fuel'] == 'diesel') echo "checked"; ?> value="diesel" name="fuel"><label> Diesel </label>
										</div>
										<hr>
									</div>
									

									<div class="col-12 ">
										<label class=" h6" for="">Price:</label>
										<div style="">
										<input type="radio"  <?php if(!empty($_GET['sort'])) if ($_GET['sort'] == 'asc') echo "checked"; ?> value="asc" name="sort"><label> Low to High </label>
										<input type="radio"   <?php if(!empty($_GET['sort'])) if ($_GET['sort'] == 'desc') echo "checked"; ?> value="desc" name="sort"><label> High to Low </label>


										</div>
										<hr>
									</div>
									



									<div class="col-12 ">
										<button type="submit" name="search" value="1" class="button button-3d button-rounded button-white button-light button-large btn-block m-0">Search</button>
									</div>
								</div>
							</form>
									<br>
							</div>
							</div>
						</div>
					</div>
				</div> <!-- Moving car on scroll End -->






<br>


				<div class="topmargin-sm nobottommargin hidden">

					<div class="container clearfix">

						<div class="heading-block center">
							<h3>Testimonials</h3>
							<span>Check out some of our Client Reviews</span>
						</div>

						<ul class="testimonials-grid grid-3 clearfix nobottommargin">

							      <?php

      $rows =mysqli_query($con,"SELECT * FROM testim ORDER BY ordr" ) or die(mysqli_error($con));
      $n=0;

      while($row=mysqli_fetch_array($rows)){

        $tid = $row['id']; 
        $tname = $row['name']; 
        $timg = $row['img']; 
        $tdesp = $row['desp']; 
        ?>
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testim/<?php echo $timg ?>" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content" style="color:#666">
										<p>

											<?php echo $tdesp ?>
										</p>
										<div class="testi-meta">
											<?php echo $tname ?>
										</div>
									</div>
								</div>
							</li>

						<?php } ?>

						</ul>

					</div>

				</div>
				<br>
				<br>	

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
	
			<?php 	include 'include/footer.php'; ?>

			<script type="text/javascript">
					

		//Car Appear In View
		function isScrolledIntoView(elem) {
			var docViewTop = $(window).scrollTop();
			var docViewBottom = docViewTop + $(window).height();

			var elemTop = $(elem).offset().top + 180;
			var elemBottom = elemTop + $(elem).height() - 500;

			return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
		}

		$(window).scroll(function () {
		   $('.running-car').each(function () {
				if (isScrolledIntoView(this) === true) {
					$(this).addClass('in-view');
				} else {
					$(this).removeClass('in-view');
				}
			});
		});

		//threesixty degree
		window.onload = init;
		var car;
		function init(){

			car = $('.360-car').ThreeSixty({
				totalFrames: 52, // Total no. of image you have for 360 slider
				endFrame: 52, // end frame for the auto spin animation
				currentFrame: 3, // This the start frame for auto spin
				imgList: '.threesixty_images', // selector for image list
				progress: '.spinner', // selector to show the loading progress
				imagePath:'demos/car/images/360degree-cars/', // path of the image assets
				filePrefix: '', // file prefix if any
				ext: '.png', // extention for the assets
				height: 887,
				width: 500,
				navigation: true,
				responsive: true,
			});
		};

		// Rev Slider
		var tpj=jQuery;
		var revapi424;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_424_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_424_1");
			}else{
				revapi424 = tpj("#rev_slider_424_1").show().revolution({
					sliderType:"carousel",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"auto",
					dottedOverlay:"none",
					delay:7000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						mouseScrollReverse:"default",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						}
						,
						arrows: {
							style:"uranus",
							enable:false,
							hide_onmobile:false,
							hide_onleave:true,
							hide_delay:200,
							hide_delay_mobile:1200,
							tmp:'',
							left: {
								h_align:"left",
								v_align:"center",
								h_offset:-10,
								v_offset:0
							},
							right: {
								h_align:"right",
								v_align:"center",
								h_offset:-10,
								v_offset:0
							}
						},
						carousel: {
							maxRotation: 65,
							vary_rotation: "on",
							minScale: 55,
							vary_scale: "on",
							horizontal_align: "center",
							vertical_align: "center",
							fadeout: "on",
							vary_fade: "on",
							maxVisibleItems: 5,
							infinity: "off",
							space: 0,
							stretch: "on"
						}
						,
						tabs: {
							style:"ares",
							enable:true,
							width:270,
							height:80,
							min_width:270,
							wrapper_padding: 10,
							wrapper_color:"transparent",
							wrapper_opacity:"0.5",
							tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{title}}</span></div><div class="tp-tab-image"></div>',
							visibleAmount: 7,
							hide_onmobile: false,
							hide_under:420,
							hide_onleave:false,
							hide_delay_mobile:1200,
							hide_delay:200,
							direction:"horizontal",
							span:true,
							position:"outer-bottom",
							space:20,
							h_align:"left",
							v_align:"bottom",
							h_offset:0,
							v_offset:0
						}
					},
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,992,768,420],
					gridheight:[600,500,960,720],
					lazyType:"single",
					shadow:0,
					spinner:"off",
					stopLoop:"off",
					stopAfterLoops: 0,
					stopAtSlide: 1,
					shuffle:"off",
					autoHeight:"off",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}
		});	/*ready*/

		// Video on play on hover
		jQuery(document).ready(function($){
			$('.videoplay-on-hover').hover( function(){
				if( $(this).find('video').length > 0 ) {
					$(this).find('video').get(0).play();
				}
			}, function(){
				if( $(this).find('video').length > 0 ) {
					$(this).find('video').get(0).pause();
				}
			});
		});


			</script>
	</div><!-- #wrapper end -->

</body>
</html>
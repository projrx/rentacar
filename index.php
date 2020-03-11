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
			max-width: 100px;
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
    color: #7a3931;
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
									<div class="flex-caption slider-caption-bg slider-caption-top-right">
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

		<section id="content">

			<div class="content-wrap">

				<div class="promo promo-light promo-full bottommargin-lg header-stick notopborder">
					<div class="container clearfix">
						<?php echo $topdesp ?>
					</div>
				</div>

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

		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="title">
						<h3> Featured Avaliable Cars: </h3>
					</div>

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">


						      <?php

      $rows =mysqli_query($con,"SELECT * FROM car WHERE feat=1 ORDER BY id desc " ) or die(mysqli_error($con));
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

					<?php } ?>




					</div><!-- #posts end -->

					<br><center><a href="cars.php" class="button button-dark button-xlarge button-rounded">View More Cars </a></center>



				</div>

			</div>

		</section>
		<br>
		<hr>

			<div class="container">
				<br>
					<div class="fancy-title title-center title-dotted-border">
						<h3>Search More Cars by Brands:</h3>
					</div>

					<div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="2" data-items-sm="3" data-items-lg="4" data-items-xl="5">

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



		<hr>



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

<br>
<br>
<hr>
<br>


				<div class="topmargin-sm nobottommargin">

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
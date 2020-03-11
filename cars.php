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

	<?php $link="cars" ?>

	<style type="text/css">
		label{
			color: #fff;
			font-size: 12px;
		}

		input[type="radio"] {
			    height: 15px;
    width: 15px;
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
				<div class="col-3" style=" position: fixed;margin-top:20px; ; z-index: 9999;max-height: 400px;">
					<div class="card bgcolor " style="max-height:450px;">
						<div class="card-body" style="">
							<h4 class="text-white">Search Your Car:</h4>
							<form action="" method="GET">
								<div class="row ">
									<div class="col-12 ">
										<label class="text-white h6" for="">Transmission:</label>
										<br>
										<div style="">
										<input type="radio" <?php if(!empty($_GET['trans'])) if ($_GET['trans'] == '%') echo "checked"; ?> name="trans" value="%"><label> Any </label>
										<input type="radio" <?php if(!empty($_GET['trans'])) if ($_GET['trans'] == 'auto') echo "checked"; ?> name="trans" value="auto"><label> Automatic </label>
										<input type="radio" <?php if(!empty($_GET['trans'])) if ($_GET['trans'] == 'manual') echo "checked"; ?> name="trans" value="manual"><label> Manual </label>
										</div>
										<hr>

									</div>

									<div class="col-12 ">
										<label class="text-white h6" for="">Fuel:</label>
										<div style="">
										<input type="radio" <?php if(!empty($_GET['fuel'])) if ($_GET['fuel'] == '%') echo "checked"; ?> name="fuel" value="%"><label> Any </label>
										<input type="radio"  <?php if(!empty($_GET['fuel'])) if ($_GET['fuel'] == 'petrol') echo "checked"; ?> name="fuel" value="petrol"><label> Petrol </label>

										<input type="radio" <?php if(!empty($_GET['fuel'])) if ($_GET['fuel'] == 'cng') echo "checked"; ?> name="fuel" value="cng"><label> CNG </label>
										<br>
										<input type="radio"  <?php if(!empty($_GET['fuel'])) if ($_GET['fuel'] == 'diesel') echo "checked"; ?> value="diesel" name="fuel"><label> Diesel </label>
										</div>
										<hr>
									</div>
									

									<div class="col-12 ">
										<label class="text-white h6" for="">Price:</label>
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
									<br>
									<br>
									<br>
						</div>
					</div>

				</div>
				<div class="col-3" style="">
				</div>
				<div class="col-9" style="">
						<div class="clear"></div>
						<br>
						<!-- Portfolio Filter
						============================================= -->
						<ul class="portfolio-filter style-2 clearfix" data-container="#portfolio" style="width: 100%">
							    <?php
      $rows =mysqli_query($con,"SELECT * FROM brands ORDER BY ordr" ) or die(mysqli_error($con));
      $n=0;
      while($row=mysqli_fetch_array($rows)){
        $bid = $row['id']; 
        $bname = $row['name']; 
        $bimg = $row['img']; 

        ?>
							<li><a href="#" data-filter=".cf-<?php echo $bid ?>"><i class="icon"><img style="height: 30px" src="images/brands/<?php echo $bimg ?>"></i><span> <?php echo $bname ?></span></a></li>

		<?php } ?>
							

							<!-- Show All Button -->
							 <li class="fright activeFilter"><a class="button button-small button-rounded button-reset" href="#" data-filter="*">Show All</a></li>
						</ul> <!-- #portfolio-filter end -->

						<div class="clear"></div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio portfolio-3 grid-container clearfix" data-layout="fitRows">
	
	<?php

	if(!empty($_GET['search'])){

		$trans = $_GET['trans'];
		$fuel = $_GET['fuel'];
		$sort = $_GET['sort'];


 		$query = "SELECT * FROM car WHERE `trans`LIKE '$trans' && `fuel`LIKE '$fuel' ORDER BY price $sort ";

      }else{

 		$query = 'SELECT * FROM car ORDER BY price asc';

      }


      $rows =mysqli_query($con,$query ) or die(mysqli_error($con));
      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
        $name = $row['name']; 
        $brand = $row['brand']; 
        $model = $row['model']; 
        $img0 = $row['img0']; 
        $img1 = $row['img1']; 
        $img2 = $row['img2']; 
        $img3 = $row['img3']; 
        $img4 = $row['img4']; 
        $engine = $row['engine']; 
        $enginec = $row['enginec']; 
        $fuel = $row['fuel']; 
        $millage = $row['millage']; 
        $trans = $row['trans']; 
        $gears = $row['gears']; 
        $dist = $row['dist']; 
        $color = $row['color']; 
        $price = $row['price']; 
        $insr = $row['insr']; 
        $due = $row['due']; 
        $docd = $row['docd']; 
        $book = $row['book']; 
        $dates = $row['dates']; 
        $datec = $row['datec']; 

        ?>


							<!-- Car 1 -->
							<article class="portfolio-item cf-<?php echo $brand; ?>" style="padding-bottom: 40px">
								<div class="portfolio-image">
									<a href="car.php?id=<?php echo $id ?>">
										<img src="images/cars/<?php echo $img0 ?>" alt="Open Imagination" style="height: 170px;">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">Rs. <?php echo number_format($price) ?> /Day</span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="car.php?id=<?php echo $id ?>">
										<?php   $rowsx =mysqli_query($con,"SELECT name FROM brands WHERE id=$brand LIMIT 1" ) or die(mysqli_error($con));
       while($rowx=mysqli_fetch_array($rowsx)){
        echo $rowx['name']; } ?>

										<?php echo $name ?></a></h3>
									
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> <?php echo $engine ?> CC</span></div>

									<div style="text-transform: capitalize;" class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> <?php echo $fuel ?></span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> <?php echo $millage ?>kmpl</span></div>

									<div style="text-transform: capitalize;" class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> <?php echo $trans ?></span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> <?php echo number_format($dist) ?> KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> <?php echo $model ?></span></div>
								</div>
							</article>

	<?php } ?>

						

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
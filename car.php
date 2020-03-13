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



<?php if(!empty($_GET['id'])){ ?>
  <?php $id=$_GET['id']; 
      $rows =mysqli_query($con,"SELECT * FROM car where id=$id " ) or die(mysqli_error($con));
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

<?php if(!empty($img0)){ ?>

<div class="slide" data-thumb="images/cars/<?php echo $img0 ?>"><a href="images/cars/<?php echo $img0 ?>" title="<?php echo $name ?>" data-lightbox="gallery-item"><img style="max-height:300px;height: 300px" src="images/cars/<?php echo $img0 ?>"></a></div>
<?php } ?>

<?php if(!empty($img1)){ ?>

<div class="slide" data-thumb="images/cars/<?php echo $img1 ?>"><a href="images/cars/<?php echo $img1 ?>" title="<?php echo $name ?>" data-lightbox="gallery-item"><img style="max-height:300px;height: 300px" src="images/cars/<?php echo $img1 ?>"></a></div>
<?php } ?>

<?php if(!empty($img2)){ ?>

<div class="slide" data-thumb="images/cars/<?php echo $img2 ?>"><a href="images/cars/<?php echo $img2 ?>" title="<?php echo $name ?>" data-lightbox="gallery-item"><img style="max-height:300px;height: 300px" src="images/cars/<?php echo $img2 ?>"></a></div>
<?php } ?>

<?php if(!empty($img3)){ ?>

<div class="slide" data-thumb="images/cars/<?php echo $img3 ?>"><a href="images/cars/<?php echo $img3 ?>" title="<?php echo $name ?>" data-lightbox="gallery-item"><img style="max-height:300px;height: 300px" src="images/cars/<?php echo $img3 ?>"></a></div>
<?php } ?>

<?php if(!empty($img4)){ ?>

<div class="slide" data-thumb="images/cars/<?php echo $img4 ?>"><a href="images/cars/<?php echo $img3 ?>" title="<?php echo $name ?>" data-lightbox="gallery-item"><img style="max-height:300px;height: 300px" src="images/cars/<?php echo $img4 ?>"></a></div>
<?php } ?>






												</div>
											</div>
										</div>
										<div class="sale-flash">
											<?php   $rowsx =mysqli_query($con,"SELECT img FROM brands WHERE id=$brand LIMIT 1" ) or die(mysqli_error($con));
       while($rowx=mysqli_fetch_array($rowsx)){
        $bimg = $rowx['img']; } ?>
											<img src="images/brands/<?php echo $bimg ?>" style="height: 50px;width: 60px;">
											</div>
									</div><!-- Product Single - Gallery End -->

								</div>

								<div class="col-6">

								<!-- Product Single - Price
									============================================= -->
									<div class="h4">
										<?php   $rowsx =mysqli_query($con,"SELECT name FROM brands WHERE id=$brand LIMIT 1" ) or die(mysqli_error($con));
       while($rowx=mysqli_fetch_array($rowsx)){
        echo $rowx['name']; } ?>

										<?php echo $name ?>
											
										</div>
									

									<div class="product-price"><ins>Rs. <?php echo number_format($price) ?> /- Per Day</ins></div>

							
									<hr>
									<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cogs"></i><span> <?php echo $engine ?> CC</span></div>

									<div style="text-transform: capitalize;" class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> <?php echo $fuel ?></span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> <?php echo $millage ?>kmpl</span></div>

									<div style="text-transform: capitalize;" class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> <?php echo $trans ?></span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> <?php echo number_format($dist) ?> KM</span></div>

									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> <?php echo $model ?></span></div>


								</div>

								<hr>

								<?php if($book==0) { ?>

								<!-- Product Single - Quantity & Cart Button
									============================================= -->
									<form action="" method="post">
										<div class="row">
										<div class="col-6">
										<h5>Book This Car For:</h5>
										<div class="quantity clearfix">
											<input onclick="wrtm()" type="button" value="-" class="minus">
											<input onchange="wrt()"  type="number"  id="months" name="qty" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />

											<input onclick="wrtp()"  type="button" value="+" class="plus">
											 &nbsp;<span style="font-size: 22px;    vertical-align: text-top;"> Days </span>

                              <input onkeyup="wrt()" type="number" class="form-control" id="price"  name="newlec" required="" style="display: none;" value="<?php echo $price ?>">


										</div>
										</div>
										<div class="col-6">
										<h5>Total:</h5>
										<span style="font-size: 25px">
                              Rs. <input id="total" type="text" style="    border: none; max-width: 100px;" name="newtotal" value="<?php echo $price ?>" required="">/-
                          </span>

										</div>
										</div>


										<br>

										<br>
										<?php 
											if(!empty($userid)) { 

      $rows =mysqli_query($con,"SELECT * FROM users where id='$userid' " ) or die(mysqli_error($con));
      while($row=mysqli_fetch_array($rows)){ 
        $drlex = $row['drlex']; 
    }

                $date= date("Y-m-d");

            $tdate=strtotime($date);
            $tdrlex=strtotime($drlex);
            $newdate = $tdrlex-$tdate;
            $newdate =  $newdate / (60*60*24) ;
            if($tdrlex<$tdate){
            	echo "Please Update Your Driving Lisence.";
            }else{ ?>
										<button type="submit"  name="book" value="<?php echo $id ?>" class="add-to-cart button nomargin">Book Now</button>

								<?php } } else { ?>
										<button type="submit"  name="book" value="<?php echo $id ?>" class="add-to-cart button nomargin">Book Now</button>
									<?php } ?>
									</form><!-- Product Single - Quantity & Cart Button End -->

								<?php }else { ?>
									<h4>This Car is Already Booked</h4>
								<?php } ?>

								<?php if(!empty($msg)) echo $msg; ?>
								
									<div class="clear"></div>
									<div class="line"></div>


									</div><!-- Product Single - Share End -->

								</div>
							</div>

					<?php } }  ?>

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
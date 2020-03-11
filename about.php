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

	<?php $link="about" ?>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php 	include 'include/header.php'; ?>

	
		<div class="">


				<!-- Featured Section
				============================================= -->
				<div class="section nomargin clearfix" style="background: #FFF url('images/bg/1.jpg') left bottom no-repeat; background-size: cover; padding: 10px 0">
					<div class="container clearfix">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-9">

								 <?php

    $rows =mysqli_query($con,"SELECT * FROM about where id=1 " ) or die(mysqli_error($con));
    

    while($row=mysqli_fetch_array($rows)){


      echo $desp = $row['desp'];


    }
      ?>
							</div>
						</div>
					</div>
				</div> <!-- Featured end -->
			</div>





		<!-- Footer
		============================================= -->
	
		<?php 	include 'include/footer.php'; ?>

			
	</div><!-- #wrapper end -->

</body>
</html>
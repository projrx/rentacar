<?php 
session_start();
if(!isset($_SESSION['user'])){
	header("location:login.php");
}
// Store Session Data
 $username= $_SESSION['user'];  // Initializing Session with value of PHP Variable
 $userid= $_SESSION['userid'];  // Initializing Session with value of PHP Variable
 ?>

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
					<?php 

      $rows =mysqli_query($con,"SELECT * FROM users where id='$userid' " ) or die(mysqli_error($con));
      while($row=mysqli_fetch_array($rows)){ 
        $drlex = $row['drlex']; 
    }

                $date= date("Y-m-d");

            $tdate=strtotime($date);
            $tdrlex=strtotime($drlex);
            $newdate = $tdrlex-$tdate;
            $newdate =  $newdate / (60*60*24) ;
            if($tdrlex<$tdate){ ?>
						<li class="list-group-item">
							<lable> 
		
            	Please Update Your Driving Lisence.
            </lable>  <a href="profile.php" >Profile Page</a>

							<span class="badge float-right" style="margin-top: 3px;">1</span>

						</li>

            <?php }
             ?> 

						
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
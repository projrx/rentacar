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

<?php 


    if(isset($_POST['confirm'])){
      $msg="Unsuccessful" ;



 
      $sql = "UPDATE orders SET `status` = 'pending' WHERE `userid` = '$userid' AND status='cart' ";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));
      if(empty($msg))  $msg="Updated";


  }

?>
		<?php if(!empty($msg)){ ?>

			<br><br>

		<center><h2>Your Order has been Confirmed. Thank You!</h2></center>
		<center><h3>View Your <a href="dashboard.php"> Account Dashboard </a> for Order Progress.</h3></center>
	<?php } ?>

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
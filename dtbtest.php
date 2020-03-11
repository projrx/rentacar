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
			</style>

<link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/buttons/1.4.0/css/buttons.dataTables.min.css" />



		</head>

		<body class="stretched">

	<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

	


			<br>
			<div class="row" style="margin-right: 0px">

				<div class="col-md-1">
				</div>
				<div class="col-md-3">

				</div>

				<div class="col-md-7">

<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
    </tbody>
    </table>

<!--
					<div class="" style="">
						<div class="clear"></div>
						<br>
						<label class="lead color">Recent Cars Booked:</label>
						<div class="float-right"> <a href="">View All >> </a></div>


						 Portfolio Items

							<div id="portfolio" class="portfolio portfolio-3 grid-container clearfix">


								<article class="portfolio-item cf-sedan" style="padding-bottom: 40px">
									<div class="portfolio-image">
										<a href="car.php">
											<img src="images/cars/1.jpg" alt="Open Imagination">


										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="car.php">Ford Mustang - White</a></h3>
										Date: <label class="color"> 11-10-2019 - 10-02-2020</label>

									</div>


								</article>


								<article class="portfolio-item cf-suv" style="padding-bottom: 40px">
									<div class="portfolio-image">
										<a href="car.php">
											<img src="images/cars/2.jpg" alt="Open Imagination">

										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="car.php">Chevrolet Traverse</a></h3>
										Date: <label class="color"> 11-10-2019 - 10-11-2019</label>
									</div>


								</article>


								<article class="portfolio-item cf-cabriolet" style="padding-bottom: 40px">
									<div class="portfolio-image">
										<a href="car.php">
											<img src="images/cars/3.jpg" alt="Open Imagination">

										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="car.php">Audi 2018 S5 Cabriolet</a></h3>
										Date: <label class="color"> 01-11-2019 - 01-05-2020</label>

									</div>

								</article>



							</div>  Filter Car lists end -->
							<br>
					

						</div>
					</div>
				</div>

			</div>
			




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.print.min.js"></script>


<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
	
</script>

		<!-- Footer
			============================================= -->


			
		</div><!-- #wrapper end -->

	</body>
	</html>
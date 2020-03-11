	<header id="header" class="full-header">

		<div id="header-wrap">

			<div class="container clearfix">

				<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

				<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo"><img src="images/<?php echo $sitelogo ?>" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

				<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="<?php if($link=='home') echo 'current'; ?>"><a href="index.php"><div>Home</div></a></li>
							<li  class="<?php if($link=='cars') echo 'current'; ?>"><a href="cars.php"><div>Cars</div></a></li>
							<!--
							<li class="<?php if($link=='blog') echo 'current'; ?> mega-menu"><a href="blog.php"><div>Blog</div></a>
							-->
							<li class="<?php if($link=='about') echo 'current'; ?>"><a href="about.php"><div>About Us</div></a></li>
							<li class="<?php if($link=='contact') echo 'current'; ?>"><a href="contact.php"><div>Contact</div></a></li>
							

						</ul>

						<?php if(!isset($_SESSION['userid'])) {?>

						<ul>
							<li class=""><a href="login.php"><div> <i class="icon-lock"> </i> Login / Signup </div></a></li>
						</ul>
					<?php }else{ ?>

						<ul>
							<li class=""><a href="profile.php"><div> <i class="icon-user"> </i> My Account </div></a>
								<ul>
									<li><a href="dashboard.php"><div>Dashboard</div></a></li>
									<li><a href="profile.php"><div>Profile</div></a><li>
									<li><a href="orders.php"><div>Orders</div></a></li>
									<li><a href="logout.php"><div>Logout</div></a></li>
								</ul>
							</li>
						</ul>
						<ul>

							<?php 
		  	$rows =mysqli_query($con,"SELECT * FROM orders where status='cart' AND userid='$userid'" ) or die(mysqli_error($con));

		  	                       $row = mysqli_num_rows($rows);

							 ?>
							<li class=""><a href="cart.php"><div> <i class="icon-cart"> </i> Cart <spna class="badge "><?php echo $row ?></spna> </div></a></li>
						</ul>

					<?php } ?>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

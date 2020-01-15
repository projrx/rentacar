	<header id="header" class="full-header">

		<div id="header-wrap">

			<div class="container clearfix">

				<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

				<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

				<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="<?php if($link=='home') echo 'current'; ?>"><a href="index.php"><div>Home</div></a></li>
							<li  class="<?php if($link=='cars') echo 'current'; ?>"><a href="cars.php"><div>Cars</div></a></li>
							<li class="<?php if($link=='blog') echo 'current'; ?> mega-menu"><a href="blog.php"><div>Blog</div></a>
							<li class="<?php if($link=='about') echo 'current'; ?>"><a href="about.php"><div>About Us</div></a></li>
							<li class="<?php if($link=='contact') echo 'current'; ?>"><a href="contact.php"><div>Contact</div></a></li>
							

						</ul>

						<ul>
							<li class=""><a href="profile"><div> <i class="icon-user"> </i> My Account </div></a>
								<ul>
									<li><a href="login.php"><div>Login / Signup</div></a></li>
									<li><a href="dashboard.php"><div>Dashboard</div></a></li>
									<li><a href="profile.php"><div>Profile</div></a><li>
									<li><a href="ledger.php"><div>Ledger</div></a></li>
									<li><a href="mycars.php"><div>My Cars</div></a></li>
									<li><a href="logout.php"><div>Logout</div></a></li>
								</ul>
							</li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

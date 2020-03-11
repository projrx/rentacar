  <style type="text/css">
    .main-menu.menu-light .navigation .navigation-header {
    color: #6B6F82;
    padding: 8px 20px 8px 20px;
}

  </style>

  <div style="max-height: 525px;    overflow: auto;" class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        
        <li class=" nav-item <?php if($link=='index') echo 'active'; ?>"><a href="index.php"><i class="la la-dashboard"></i><span class="menu-title">Dashboard</span></a>


        <li class=" navigation-header">
          <span>Content</span>
        </li>

        <li class=" nav-item <?php if($link=='home') echo 'active';?>"><a href="home.php"><i class="la la-home"></i><span class="menu-title"> Home</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="slider.php">Slider</a>        </li>
            <li><a class="menu-item" href="post.php">Home Post</a>           </li>
            <li><a class="menu-item" href="testim.php">Testimonials</a>        </li>

          </ul>
        </li>

        <li class=" nav-item <?php if($link=='about') echo 'active'; ?>"><a href="about.php"><i class="la la-pencil"></i><span class="menu-title">About</span></a>

        <li class=" nav-item <?php if($link=='contact') echo 'active'; ?>"><a href="contact.php"><i class="la la-phone"></i><span class="menu-title">Contact</span></a>




        <li class=" navigation-header">
          <span>Management</span>
        </li>


        <li class=" nav-item <?php if($link=='cars') echo 'active'; ?>"><a href="cars.php"><i class="la la-car"></i><span class="menu-title">Cars</span></a>

             <ul class="menu-content">
            <li><a class="menu-item" href="newcar.php">Add New Car</a>        </li>
            <li><a class="menu-item" href="cars.php">Manage Car</a>           </li>
            <li><a class="menu-item" href="brands.php">Manage Brands</a>           </li>

          </ul>
        </li>



        <li class=" nav-item <?php if($link=='users') echo 'active'; ?>"><a href="users.php"><i class="la la-users"></i><span class="menu-title">Users</span></a>


        <li class=" nav-item <?php if($link=='payments') echo 'active'; ?>"><a href="payments.php"><i class="la la-money"></i><span class="menu-title">Payment Methods</span></a>



        <li class=" nav-item <?php if($link=='orders') echo 'active'; ?>"><a href="cars.php"><i class="la la-paste"></i><span class="menu-title">Orders</span></a>

             <ul class="menu-content">
            <li><a class="menu-item" href="porders.php">Pending Orders</a>        </li>
            <li><a class="menu-item" href="oorders.php">Ongoing Orders</a>           </li>
            <li><a class="menu-item" href="torders.php">Terminated Orders</a>           </li>

          </ul>
        </li>



       
        

      </ul>
    </div>
  </div>
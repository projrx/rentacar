<?php 
session_start();
if(isset($_SESSION['user'])){
  header("location:profile.php");
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



  <?php
  if(isset($_POST['submit'])){

    $msg="Unsuccessful" ;


    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $query = mysqli_query($con,"SELECT * from users where username='$username'")or die(mysqli_error($con));
    $un = mysqli_num_rows($query);
    $query = mysqli_query($con,"SELECT * from users where email='$email'")or die(mysqli_error($con));
    $em = mysqli_num_rows($query);
    if ($un > 0) {
      $error = 'Username is Registered.';
    }else if ($em > 0) {
      $error = 'Email is Already Registered.';
    }else{


      $img='avatar.png';

      $data=mysqli_query($con,"INSERT INTO users (name,email,username,password,phone,img)VALUES ('$name','$email','$username','$password','$phone','$img')")or die( mysqli_error($con) );


$_SESSION['user']=$username; // Initializing Session


header("location:editprofile.php"); // Redirecting To Other Page


}





}



?>


<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php 	include 'include/header.php'; ?>

	
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>My Account</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Login</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

						<ul class="tab-nav tab-nav2 center clearfix">
							<li class="inline-block"><a href="#tab-login">Login</a></li>
							<li class="inline-block"><a href="#tab-register">Register</a></li>
						</ul>

						<div class="tab-container">

							<div class="tab-content clearfix" id="tab-login">
								<div class="card nobottommargin">
									<div class="card-body" style="padding: 40px;">
										<form action="" method="post">

											
											<h1>
          <a href="./">Login</a>
        </h1>
        <form action="" method="post">
          <div class="form-group">
            <input class="form-control" name="username" placeholder="Email / Username" type="text">
          </div>
          <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password">
          </div>
          <div class="form-group">

            <input type="submit" name="login" class="btn btn-info" value="Submit >">
          </div>
          
        </form>


        <?php
                       
           if (isset($_POST['login'])) {
                       if (empty($_POST['username']) || empty($_POST['password'])) {
                       echo "Username or Password is empty";
                       }
                       else
                       {
                       $username=$_POST['username'];
                       $password=$_POST['password'];
                       $username3 = stripslashes($username);
                       $username2 = str_replace("<", "", $username3);
                       $username1 = str_replace(">", "", $username2);
                       $username = str_replace("'", "", $username1);
                       $password3 = stripslashes($password);
                       $password2 = str_replace("<", "", $password3);
                       $password1 = str_replace(">", "", $password2);
                       $password = str_replace("'", "", $password1);



                       $query = mysqli_query($con,"SELECT * from users where password='$password' AND (username='$username' OR email='$username') ")or die(mysqli_error($con));
                       $rows = mysqli_num_rows($query);
                       if ($rows == 1) {



      $rowsx =mysqli_query($con,"SELECT * from users where password='$password' AND (username='$username' OR email='$username') LIMIT 1 " ) or die(mysqli_error($con));
      while($rowx=mysqli_fetch_array($rowsx)){
        $userid = $rowx['id'];
        $username = $rowx['username'];
    }



                       $_SESSION['user']=$username; // Initializing Session
                       $_SESSION['userid']=$userid; // Initializing Session
                      
                  
                       header("location:profile.php"); // Redirecting To Other Page
                       } else {
                        echo "Username or Password is Invalid";

                       }
                       }
                       }

                       ?>


										</form>
									</div>
								</div>
							</div>

							<div class="tab-content clearfix" id="tab-register">
								<div class="card nobottommargin">
									<div class="card-body" style="padding: 40px;">
										<h3>Register for an Account</h3>

          <form id="register-form" name="register-form" action="" method="post">

            <div class="col_full">
              <label>Name:</label>
              <input type="text" name="name" value="" class="form-control" required />
            </div>

            <div class="col_full">
              <label>Email Address:</label>
              <input type="text" name="email" value="" class="form-control" required />
            </div>

            <div class="col_full">
              <label>Choose a Username:</label>
              <input type="text" name="username" value="" class="form-control" required/>

            </div>

            <div class="col_full">
              <label>Phone:</label>
              <input type="number" name="phone" value="" class="form-control" required />
            </div>

            <div class="col_full">
              <label>Choose Password:</label>
              <input type="password" id="pass" name="password" value="" class="form-control" required />
            </div>

            <div class="col_full">
              <label>Re-enter Password:</label>
              <input onkeyup="check();" type="password" id="repass" name="repassword" value="" class="form-control" required />
            </div>



            <div class="col_full text-center">
              <br><br>
              <p class="lead"> <?php if(!empty($error)) echo $error ?> </p>
            </div>


            <div class="col_full text-center">
              <br><br>
              <button disabled="" id="submit" class="btn btn-info text-center" name="submit" value="register">Register Now</button>
            </div>

          </form>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

<script type="text/javascript">
	
  function check() {

    pass = document.getElementById('pass').value;
    repass = document.getElementById('repass').value;

    if (pass!=repass) { 
      document.getElementById('submit').disabled=true;
    }else{
      document.getElementById('submit').disabled=false;
    }

  }


</script>




		<!-- Footer
		============================================= -->
	
		<?php 	include 'include/footer.php'; ?>

			
	</div><!-- #wrapper end -->

</body>
</html>
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


<?php 

  if(isset($_POST['updateid'])){
    $msg="Unsuccessful" ;

    $id=$_POST['updateid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $drlex=$_POST['drlex'];

    $newpassword=$_POST['newpassword'];


    if (!empty($_FILES['img']['name'])) {

        // Get image name
      $image = $_FILES['img']['name'];
      $image = md5(uniqid())  . "1.png";

        // image file directory
      $target = "images/users/".basename($image);

      $data=mysqli_query($con,"UPDATE users SET `img`='$image' where `id`='$id'")or die( mysqli_error($con) );

      if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }      

      }


    if (!empty($_FILES['drl']['name'])) {

        // Get image name
      $image = $_FILES['drl']['name'];
      $image = md5(uniqid())  . "1.png";

        // image file directory
      $target = "images/users/".basename($image);

      $data=mysqli_query($con,"UPDATE users SET `drl`='$image' where `id`='$id'")or die( mysqli_error($con) );

      if (move_uploaded_file($_FILES['drl']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }      

      }


      if (!empty($newpassword)){

      $sql = "UPDATE users SET `password` = '$newpassword' WHERE  `id`='$id' ";
      mysqli_query($con, $sql) ;


    }

      $sql = "UPDATE users SET `name` = '$name',`email` = '$email',`city` = '$city',`phone` = '$phone',`drlex` = '$drlex',`address` = '$address' WHERE  `id`='$id' " ;


      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));
      if(empty($msg))  $msg="Updated";

header("location:profile.php"); // Redirecting To Other Page
      
    }
  ?>




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

					<h2>Edit Profile: </h2>


    <table class="table">
      
         <?php

      $rows =mysqli_query($con,"SELECT * FROM users where id='$userid' " ) or die(mysqli_error($con));
      $n=0;

      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
        $name = $row['name']; 
        $username = $row['username']; 
        $email = $row['email']; 
        $phone = $row['phone']; 
        $address = $row['address']; 
        $city = $row['city']; 
        $img = $row['img']; 
        $drl = $row['drl']; 
        $drlex = $row['drlex']; 
        $password = $row['password']; 
        $datec = $row['datec']; 
        
        ?>

      <tbody>
        <form method="post" action="" enctype="multipart/form-data">

          <tr>
            <td style="max-width: 100px;">
            	Profile Image: <br><br>

              <img style="width:250px;height: 200px; " src="images/users/<?php echo $img ?>" class="form-control" ?><br>
              <input  type="file" style="max-width: 250px" class="form-control" name="img">

            </td>

            <td>
            	 Name: <br><br>
              <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
	          	<br>
           		Email: <br><br>

              <input  type="text" class="form-control" name="email" value="<?php echo $email ?>">
              <br>

            	Username: <br><br>
              <input readonly type="text" class="form-control" name="" value="<?php echo $username ?>">
           		
            </td>

          </tr>


          <tr>
            <td> Phone: </td>
            <td>
              <input placeholder="Enter your Contact Phone Number"  type="text" class="form-control" name="phone" value="<?php echo $phone ?>">
            </td>

          </tr>


          <tr>
            <td> Address: </td>
            <td>
              <input type="text" class="form-control" name="address" value="<?php echo $address ?>" placeholder="Your Street Address">
            </td>

          </tr>


          <tr>
            <td> City: </td>
            <td>   
            	<select class="select2 form-control" name="city" style="text-transform: capitalize;"  >
                              <?php 
      $rows =mysqli_query($con,"SELECT * FROM cities order by city" ) or die(mysqli_error($con));
      while($row=mysqli_fetch_array($rows)){
        $cid = $row['city']; 
        $bname = $row['city'];  ?>
                              <option <?php if($cid==$city) echo "selected"; ?> style="text-transform: capitalize;" value="<?php echo $cid ?>"><?php echo $bname ?></option>
                              <?php } ?>
                            </select>
            </td>

          </tr>



          <tr>   

           <td style="max-width: 100px;">
            	Driving Lisence Image: <br><br>

            </td>
            <td>

              <img style="width:250px;height: 200px; " src="images/users/<?php echo $drl ?>" class="form-control" ?><br>
              <input  type="file" style="max-width: 250px" class="form-control" name="drl">

            </td>

          </tr>



          <tr>
            <td> Driving Lisence Expiry: </td>
            <td>
              <input type="date" class="form-control" name="drlex" value="<?php echo $drlex ?>">
            </td>

          </tr>



          <tr>
            <td> New Password: </td>
            <td  style="max-width:;">
              <input  type="text" class="form-control" name="newpassword" value="" placeholder="New Password">
              <input  type="text" class="form-control" name="confirm" value="" placeholder="Confirm Password">
            </td>

          </tr>


          <tr>
            <td colspan="2">

              <div class="text-center">

                <button type="submit" name="updateid" value="<?php echo $id ?>" class="btn btn-info"> <i class="fa fa-plus"></i>Update</button>
              </div>
            </td>
          </tr>

        </form>
      </tbody>

  <?php } ?>

    </table>



				</div>
			</div>

		</div>






		<!-- Footer
			============================================= -->

			<?php 	include 'include/footer.php'; ?>

			
		</div><!-- #wrapper end -->

	</body>
	</html>
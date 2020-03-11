<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Contact </title>
  <?php include "include/head.php"?>



  <?php
  if(isset($_POST['submit'])){
    $msg="Unsuccessful" ;




    $sitename = $_POST['sitename'];  

    $sitephone = $_POST['sitephone'];  
    $sitemail = $_POST['sitemail'];  
    $siteaddress1 = $_POST['siteaddress'];  
    $siteaddress=str_replace("'", "''", $siteaddress1);




    $facebook = $_POST['facebook'];  
    $linkedin = $_POST['linkedin'];  
    $insta = $_POST['insta'];  
    $youtube = $_POST['youtube'];




    if (!empty($_FILES['image1']['name'])) {

      // Get image name
      $image = $_FILES['image1']['name'];
      $image = md5(uniqid())  . "1.png";
      
      // image file directory
      $target = "../images/".basename($image);

      $data=mysqli_query($con,"UPDATE contact SET `logo`='$image' where `id`=1")or die( mysqli_error($con) );

      if (move_uploaded_file($_FILES['image1']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }


    }


    $sql = "UPDATE contact SET `name` = '$sitename',`phone` = '$sitephone',`email` = '$sitemail',`address` = '$siteaddress',`facebook` = '$facebook',`linkedin` = '$linkedin',`insta` = '$insta',`youtube` = '$youtube' WHERE `id` =1";




    mysqli_query($con, $sql) ;
    ($msg=mysqli_error($con));
    if(empty($msg))  $msg="Saved";


  }

  ?>




</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

  <?php $link='contact'; ?>
  <?php include "include/header.php"?>


  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">

     
  <?php include "include/sidebar.php"?>


      <div class="content-body">
        <div class="card">
        <div class="card-body">

     
    <br><br>


    <?php

    $rows =mysqli_query($con,"SELECT * FROM contact where id=1 " ) or die(mysqli_error($con));
    

    while($row=mysqli_fetch_array($rows)){


      $sitename = $row['name'];  
      $sitelogo = $row['logo'];  
      $sitephone = $row['phone'];  
      $sitemail = $row['email'];  
      $siteaddress = $row['address']; 

      $facebook = $row['facebook'];  
      $linkedin = $row['linkedin'];  
      $insta = $row['insta'];  
      $youtube = $row['youtube'];  
    }

    ?>


    <form method="post" action="" enctype="multipart/form-data">

      <div class="row">
        <div class="col-md-2">

        </div>

        <div class="col-md-8">

          <table class=" table-hover">
            <thead>

            </thead>
            <tbody>


              <tr>
                <td style="min-width: 100px"> Site Name: </td>
                <td> <input type="text" name="sitename" class="form-control" value="<?php echo $sitename ?>"> </td>
              </tr>
              <tr>
                <td> Site Phone: </td>
                <td> <input type="text" name="sitephone" class="form-control" value="<?php echo $sitephone ?>"> </td>
              </tr>
              <tr>
                <td> Site Email: </td>
                <td> <input type="text" name="sitemail" class="form-control" value="<?php echo $sitemail ?>"> </td>
              </tr>

              <tr>
                <td> Site Address: </td>
                <td> <textarea name="siteaddress" class="form-control"><?php echo $siteaddress ?> </textarea> </td>
              </tr>


              <tr>
                <td> Facebook: </td>
                <td> <input type="text" name="facebook" class="form-control" value="<?php echo $facebook ?>"> </td>
              </tr>
              <tr>
                <td> Linkedin: </td>
                <td> <input type="text" name="linkedin" class="form-control" value="<?php echo $linkedin ?>"> </td>
              </tr>
              <tr>
                <td> Instagram: </td>
                <td> <input type="text" name="insta" class="form-control" value="<?php echo $insta ?>"> </td>
              </tr>
              <tr>
                <td> Youtube: </td>
                <td> <input type="text" name="youtube" class="form-control" value="<?php echo $youtube ?>"> </td>
              </tr>


              <tr>
                <td> Logo: </td>
                <td> 
                  <br>
                  <br>
                    <img src="../images/<?php echo $sitelogo ; ?>" class="">
                    <br>
                    <br>
                 </td>
              </tr>


              <tr>
                <td> Change Logo: </td>
                <td>
                  <input type="file" style="width: 400px;" name="image1" class="form-control">
                </td>
              </tr>




            </tbody>
          </table>

          <br><br>
        

          <center>
        

            <input type="submit" name="submit" class="btn">
          </center>

       </div>
       </div>
       </div>


    </div>
  </div>

  <?php include "include/footer.php"?>


</body>
</html>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Home Slider </title>
  <?php include "include/head.php"?>


<?php 

  if(isset($_POST['submit'])){
    $msg="Unsuccessful" ;

    $id=1;
    $desp=$_POST['desp'];





      

      $sql = "UPDATE about SET `desp` = '$desp' WHERE `id` =$id";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));
      if(empty($msg))  $msg="Updated";
      
    }
  ?>



</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

<?php $link='about'; ?>

  <?php include "include/header.php"?>


  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">

     
  <?php include "include/sidebar.php"?>

   <?php

      $rows =mysqli_query($con,"SELECT * FROM about where id=1 " ) or die(mysqli_error($con));
      

      while($row=mysqli_fetch_array($rows)){


        $desp = $row['desp'];


      }
        ?>
      <div class="content-body">
          <div class="card">
        <div class="card-body">

          <h3>About  Post: </h3>
          <br><br>
        <form method="post" action="" enctype="multipart/form-data">
            <textarea name="desp" class="ckeditor"><?php echo $desp ?>  </textarea>

              <br><br>

            <center><button type="submit" name="submit"  class="btn btn-default">Save</button></center>

              </form>


      </div>
      </div>


      </div>



    </div>
  </div>

  <?php include "include/footer.php"?>


</body>
</html>
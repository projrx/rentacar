<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Social </title>
  <?php include "include/head.php"?>



<?php 

  if(isset($_POST['updateid'])){
    $msg="Unsuccessful" ;

    $id=1;


  
        $facebook = $_POST['facebook']; 
        $linkedin = $_POST['linkedin']; 
        $youtube = $_POST['youtube']; 
        $insta = $_POST['insta']; 




          
      $sql = "UPDATE contact SET `facebook` = '$facebook',`linkedin` = '$linkedin',`insta` = '$insta',`youtube` = '$youtube' WHERE `id` =$id";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));
      if(empty($msg))  $msg="Updated";
      
    }
  ?>



</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

  <?php $link='social'; ?>
  <?php include "include/header.php"?>


  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">

     
  <?php include "include/sidebar.php"?>


      <div class="content-body">
        <div class="card">
        <div class="card-body">

      <?php $id=1; ?>

    <br><br>
    <table class="table table-bordered">
   <?php
      $n=8;

      $rows =mysqli_query($con,"SELECT * FROM contact where id=$id " ) or die(mysqli_error($con));

      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
      $facebook = $row['facebook'];  
      $linkedin = $row['linkedin'];  
      $insta = $row['insta'];  
      $youtube = $row['youtube'];     

      ?>

      <tbody>
        <form method="post" action="" enctype="multipart/form-data">

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
            <td colspan="2">

              <div class="text-center">

                <button type="submit" name="updateid" value="<?php echo $id ?>" class="btn btn-info"> <i class="fa fa-plus"></i>Update</button>
              </div>
            </td>
          </tr>

        </form>
      </tbody>
    </table>
  <?php } ?>


       </div>
       </div>
       </div>


    </div>
  </div>

  <?php include "include/footer.php"?>


</body>
</html>
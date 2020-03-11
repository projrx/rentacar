<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Explore </title>
  <?php include "include/head.php"?>



<?php 

  if(isset($_POST['updateid'])){
    $msg="Unsuccessful" ;

    $id=1;


  
        $url = $_POST['url']; 





          
      $sql = "UPDATE explore SET `url` = '$url' WHERE `id` =$id";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));
      if(empty($msg))  $msg="Updated";
      
    }
  ?>



</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

  <?php $link='explore'; ?>
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

      $rows =mysqli_query($con,"SELECT * FROM explore where id=$id " ) or die(mysqli_error($con));

      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
      $url = $row['url']; 


      ?>

      <tbody>
        <form method="post" action="" enctype="multipart/form-data">

           <tr class="text-center">
            <center>
                <?php echo $url ?>
              
            </center>
            </tr>

           <tr>
                <td> <textarea name="url" class="form-control" ><?php echo $url ?></textarea></td>
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
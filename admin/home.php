<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Dashboard </title>
  <?php include "include/head.php"?>



<?php 

  if(isset($_POST['updateid'])){
    $msg="Unsuccessful" ;

    $id=1;


  
        $heading = $_POST['heading']; 
        $desp1 = $_POST['desp']; 
        $btext = $_POST['btext']; 
        $burl = $_POST['burl']; 
        $durl = $_POST['durl'];                   
        $turl = $_POST['turl'];   
        $surl = $_POST['surl'];


    $desp = str_replace("'", "''", $desp1);       


    if (!empty($_FILES['img']['name'])) {

        // Get image name
      $image = $_FILES['img']['name'];
      $image = md5(uniqid())  . "1.png";

        // image file directory
      $target = "../image/".basename($image);

      $data=mysqli_query($con,"UPDATE home SET `mimg`='$image' where `id`='$id'")or die( mysqli_error($con) );

      if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }  

          }
      $sql = "UPDATE home SET `heading` = '$heading',`desp` = '$desp',`btext` = '$btext',`burl` = '$burl',`durl` = '$durl',`turl` = '$turl',`surl` = '$surl' WHERE `id` =$id";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));
      if(empty($msg))  $msg="Updated";
      
    }
  ?>



</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

  <?php $link='home'; ?>
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

      $rows =mysqli_query($con,"SELECT * FROM home where id=$id " ) or die(mysqli_error($con));

      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
        $heading = $row['heading']; 
        $desp = $row['desp']; 
        $mimg = $row['mimg']; 
        $btext = $row['btext']; 
        $burl = $row['burl']; 
        $durl = $row['durl'];                   
        $turl = $row['turl'];   
        $surl = $row['surl'];   

      ?>

      <tbody>
        <form method="post" action="" enctype="multipart/form-data">

          <tr>
            <td> Heading: </td>
            <td>
              <input type="text" class="form-control" name="heading" value="<?php echo $heading ?>">
            </td>

          </tr>

          <tr>
            <td> Desp </td>
            <td>
              <textarea class="form-control" name="desp"><?php echo $desp ?></textarea>
            </td>
          </tr>

          <tr>
            <td> Button Text: </td>
            <td  style="">
              <input type="text" class="form-control" name="btext" value="<?php echo $btext ?>">
            </td>

          </tr>

          <tr>
            <td> Button URL: </td>
            <td  style="">
              <input type="text" class="form-control" name="burl" value="<?php echo $burl ?>">
            </td>

          </tr>

          <tr>
            <td> Download URL: </td>
            <td  style="">
              <input type="text" class="form-control" name="durl" value="<?php echo $durl ?>">
            </td>

          </tr>

          <tr>
            <td> Image: </td>
            <td colspan="2">
              <img style="width:200px;height: 400px; " src="../image/<?php echo $mimg ?>" class="form-control" ?><br>
              <input  type="file" class="form-control" name="img">

            </td>
          </tr>


          <tr>
            <td>Teacher Download URL: </td>
            <td  style="">
              <input type="text" class="form-control" name="turl" value="<?php echo $turl ?>">
            </td>

          </tr>

          <tr>
            <td>Student Download URL: </td>
            <td  style="">
              <input type="text" class="form-control" name="surl" value="<?php echo $surl ?>">
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
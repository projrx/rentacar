<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Home Posts </title>
  <?php include "include/head.php"?>


<?php 

  if(isset($_POST['submit'])){
    $msg="Unsuccessful" ;

    $id=1;
    $name=$_POST['topdesp'];
    $post=$_POST['post'];


    if (!empty($_FILES['img']['name'])) {

        // Get image name
      $image = $_FILES['img']['name'];
      $image = md5(uniqid())  . "1.png";

        // image file directory
      $target = "../images/home/".basename($image);

      $data=mysqli_query($con,"UPDATE home SET `img`='$image' where `id`='$id'")or die( mysqli_error($con) );

      if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }      }
      

      $sql = "UPDATE home SET `topdesp` = '$name',`post` = '$post' WHERE `id` =$id";

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

 <?php

    $rows =mysqli_query($con,"SELECT * FROM home where id=1 " ) or die(mysqli_error($con));
    

    while($row=mysqli_fetch_array($rows)){


      $topdesp = $row['topdesp'];
      $post = $row['post'];
      $img = $row['img'];

    }
      ?>
      <div class="content-body">
          <div class="card">
        <div class="card-body">

          <h3> Homepage Top Post: </h3>
          <br><br>
        <form method="post" action="" enctype="multipart/form-data">
            <textarea name="topdesp" class="ckeditor"><?php echo $topdesp ?>  </textarea>

              <br><hr><br>
            <h3> Homepage Top and Bottom Posts: </h3>
            <div class="row">
        
            <div class="col-md-8">
            <textarea name="post" class="ckeditor">    <?php echo $post ?>  </textarea>

              </div>

                  <div class="col-md-4">  

              <br>
              <br>

            <img src="../images/home/<?php echo $img ?>" style="max-height: 200px">
            <br>
            <br>
            <input type="file" name="img" class="form-control">

            </div>
            
            </div>
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
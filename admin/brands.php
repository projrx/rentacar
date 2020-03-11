<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Car Brands </title>
  <?php include "include/head.php"?>


    <?php 
 for ($i=0; $i < 100 ; $i++) { 

  if(isset($_POST['save'.$i])){
    $msg="Unsuccessful" ;

    $id=$_POST['save'.$i];
    $name=$_POST['name'.$i];

    $ordr=$_POST['ordr'.$i];


    if (!empty($_FILES['img'.$i]['name'])) {

        // Get image name
      $image = $_FILES['img'.$i]['name'];
      $image = md5(uniqid())  . "1.png";

        // image file directory
      $target = "../images/brands/".basename($image);

      $data=mysqli_query($con,"UPDATE brands SET `img`='$image' where `id`='$id'")or die( mysqli_error($con) );

      if (move_uploaded_file($_FILES['img'.$i]['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }      }
      $sql = "UPDATE brands SET `name` = '$name',`ordr` = '$ordr' WHERE `id` =$id";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));

        if(empty($msg))  $msg="Updated";


    }

  }
  ?>

  <?php 

  for ($i=0; $i < 100 ; $i++) { 

    if(isset($_POST['del'.$i])){
      $msg="Unsuccessful" ;

      $id=$_POST['del'.$i];

      $sql = "DELETE FROM brands WHERE id=$id  ";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));

      if(empty($msg))  $msg="Deleted";

    }

  }
  ?>

  <?php
  if(isset($_POST['add'])){

    $msg="Unsuccessful" ;

    $name=$_POST['newname'];

    $ordr=$_POST['newordr'];    


    $datec=date('Y-m-d');



    if (!empty($_FILES['img']['name'])) {

         // Get image name
     $image = $_FILES['img']['name'];
     $image = md5(uniqid())  . "1.png";

         // image file directory
     $target = "../images/brands/".basename($image);     
     if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }

  }   
  $data=mysqli_query($con,"INSERT INTO brands (name,img,ordr,datec)VALUES ('$name','$image','$ordr','$datec')")or die( mysqli_error($con) );


  $msg="Added" ;    
}

?>



</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

<?php $link='cars'; ?>

  <?php include "include/header.php"?>


  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">

     
  <?php include "include/sidebar.php"?>


      <div class="content-body">
          <div class="card">
        <div class="card-body">

          <h3> Car Brands: </h3>
          <br><br>
   <table class="table table-bordered">
    <thead>
      <th>
       Title 
     </th>


     <th style="width: 310px">
      Image
    </th>

    <th style="width: 60px;">
      Order
    </th>

    <th class="hidden-xs">
      Save
    </th>              </thead>
    <tbody>

      <?php

      $rows =mysqli_query($con,"SELECT * FROM brands ORDER BY ordr" ) or die(mysqli_error($con));
      $n=0;

      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
        $name = $row['name']; 
        $img = $row['img']; 
        $ordr = $row['ordr']; 
        ?>
        <form method="post" action="" enctype="multipart/form-data">

          <tr>
            <td>
              <input type="text" class="form-control" name="name<?php echo $n ?>" value="<?php echo $name ?>" required>
            </td>


            <td>
              <img style="width:130px;height: 100px; " src="../images/brands/<?php echo $img ?>" class="form-control" ?><br>
              <input  type="file" class="form-control" name="img<?php echo $n ?>">

            </td>


            <td >
              <input type="text" class="form-control" name="ordr<?php echo $n ?>" value="<?php echo $ordr ?>" required>
            </td>


            <td>

              <div class="btn-group">

                <button type="submit" name="save<?php echo $n ?>" class="btn btn-success" value="<?php echo $id ?>"> <i class="fa fa-save"></i>Save</button>

                <button type="submit" name="del<?php echo $n ?>" class="btn btn-danger" value="<?php echo $id ?>"> <i class="fa fa-trash-o"></i>Del</button>
              </div>
            </td>
          </tr>

        </form>

        <?php $n++; } ?>

        

          <form method="post" action="" enctype="multipart/form-data">

          <tr>
            <td>
              <input type="text" class="form-control" name="newname" value="" required="">
            </td>

            <td >
              <input type="file" class="form-control" name="img" >

            </td>


            <td>
              <input type="text" class="form-control" name="newordr" value="" required="">
            </td>



            <td>

              <div class="btn-group">

                <button type="submit" name="add" class="btn btn-info"> <i class="fa fa-plus"></i>Add</button>
              </div>
            </td>
          </tr>

        </form>
      </tbody>
    </table>
      </div>
      </div>


      </div>



    </div>
  </div>

  <?php include "include/footer.php"?>


</body>
</html>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Home Testimonials </title>
  <?php include "include/head.php"?>


    <?php 
 for ($i=0; $i < 100 ; $i++) { 

  if(isset($_POST['save'.$i])){
    $msg="Unsuccessful" ;

    $id=$_POST['save'.$i];
    $name=$_POST['name'.$i];
    $desp1=$_POST['desp'.$i];
    $desp = str_replace("'", "''", $desp1);       

    $ordr=$_POST['ordr'.$i];


    if (!empty($_FILES['img'.$i]['name'])) {

        // Get image name
      $image = $_FILES['img'.$i]['name'];
      $image = md5(uniqid())  . "1.png";

        // image file directory
      $target = "../images/testim/".basename($image);

      $data=mysqli_query($con,"UPDATE testim SET `img`='$image' where `id`='$id'")or die( mysqli_error($con) );

      if (move_uploaded_file($_FILES['img'.$i]['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }      }
      $sql = "UPDATE testim SET `name` = '$name',`ordr` = '$ordr',`desp` = '$desp' WHERE `id` =$id";

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

      $sql = "DELETE FROM testim WHERE id=$id  ";

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
    $desp=$_POST['newdesp'];

    $ordr=$_POST['newordr'];    


    $datec=date('Y-m-d');



    if (!empty($_FILES['img']['name'])) {

         // Get image name
     $image = $_FILES['img']['name'];
     $image = md5(uniqid())  . "1.png";

         // image file directory
     $target = "../images/testim/".basename($image);     
     if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }

  }   
  $data=mysqli_query($con,"INSERT INTO testim (name,img,desp,ordr,datec)VALUES ('$name','$image','$desp','$ordr','$datec')")or die( mysqli_error($con) );


  $msg="Added" ;    
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

          <h3> Homepage Testimonials: </h3>
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

      $rows =mysqli_query($con,"SELECT * FROM testim ORDER BY ordr" ) or die(mysqli_error($con));
      $n=0;

      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
        $name = $row['name']; 
        $img = $row['img']; 
        $desp = $row['desp']; 
        $ordr = $row['ordr']; 
        ?>
        <form method="post" action="" enctype="multipart/form-data">

          <tr>
            <td>
              <textarea name="desp<?php echo $n ?>" class="form-control"><?php echo $desp ?></textarea>
              <br>
              <input type="text" class="form-control" name="name<?php echo $n ?>" value="<?php echo $name ?>" required>
            </td>


            <td>
              <img style="width:120px;height: 100px; " src="../images/testim/<?php echo $img ?>" class="form-control" ?><br>
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
              <textarea name="newdesp" class="form-control" placeholder="Description"></textarea>
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
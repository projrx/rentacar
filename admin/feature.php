<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Features </title>
  <?php include "include/head.php"?>

  <style type="text/css">
    .table th, .table td {
    padding: 0.75rem 1rem;
}

  </style>


  <?php 
 for ($i=0; $i < 100 ; $i++) { 

  if(isset($_POST['save'.$i])){
    $msg="Unsuccessful" ;

    $id=$_POST['save'.$i];
    $heading=$_POST['heading'.$i];
    $desp1=$_POST['text'.$i];
    $url=$_POST['url'.$i];
    $ordr=$_POST['ordr'.$i];

    $desp = str_replace("'", "''", $desp1);

      $sql = "UPDATE feature SET `heading` = '$heading',`text` = '$desp',`ordr` = '$ordr',`url` = '$url' WHERE `id` =$id";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));
      if(empty($msg))  $msg="Updated";
      
    }

  }
  ?>


</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

  <?php $link='feature'; ?>
  <?php include "include/header.php"?>


  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">

     
  <?php include "include/sidebar.php"?>


      <div class="content-body">
        <div class="card">
        <div class="card-body">

     

    <br><br>
   <table class="table table-bordered">
    <thead>
      <th>
       Heading 
     </th>




    <th style="min-width: 350px">
      Description
    </th>

    <th>
      URL
    </th>
    <th style="width: 60px;">
      Order
    </th>

    <th  style="max-width: 80px;" >
      Save
    </th>              </thead>
    <tbody>

      <?php

      $rows =mysqli_query($con,"SELECT * FROM feature ORDER BY ordr" ) or die(mysqli_error($con));
      $n=0;

      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
        $heading = $row['heading']; 
        $text = $row['text']; 
        $url = $row['url']; 
        $ordr = $row['ordr']; 

        ?>
        <form method="post" action="" enctype="multipart/form-data">

          <tr>
            <td>
              <input type="text" class="form-control" name="heading<?php echo $n ?>" value="<?php echo $heading ?>" required>
            </td>


            <td>
              <input type="text" class="form-control" name="text<?php echo $n ?>" value="<?php echo $text ?>" required>
            </td>

            <td>
              <input type="text" class="form-control" name="url<?php echo $n ?>" value="<?php echo $url ?>" required>
            </td>

            <td >
              <input type="text" class="form-control" name="ordr<?php echo $n ?>" value="<?php echo $ordr ?>" required>
            </td>


            <td style >

              <div class="btn-group">

                <button type="submit" name="save<?php echo $n ?>" class="btn btn-success" value="<?php echo $id ?>"> <i class="fa fa-save"></i>Save</button>

              </div>


            </td>
          </tr>

        </form>

        <?php $n++; } ?>



      </tbody>
    </table>
<br><br>
       </div>
       </div>
       </div>


    </div>
  </div>

  <?php include "include/footer.php"?>


</body>
</html>
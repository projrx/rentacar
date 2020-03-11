<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Payment Methods </title>
  <?php include "include/head.php"?>



  <?php
  if(isset($_POST['submit'])){
    $msg="Unsuccessful" ;




    $easypaisa = $_POST['easypaisa'];  

    $jazzcash = $_POST['jazzcash'];  
    $bank = $_POST['bank'];  




    $sql = "UPDATE payment SET `easypaisa` = '$easypaisa',`jazzcash` = '$jazzcash',`bank`='$bank' WHERE `id` =1";




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

    $rows =mysqli_query($con,"SELECT * FROM payment where id=1 " ) or die(mysqli_error($con));
    

    while($row=mysqli_fetch_array($rows)){


      $jazzcash = $row['jazzcash'];  
      $easypaisa = $row['easypaisa'];  
      $bank = $row['bank'];  

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
                <td style="min-width: 100px"> Easypaisa: </td>
                <td> <input type="text" name="easypaisa" class="form-control" value="<?php echo $easypaisa ?>"> </td>
              </tr>
              <tr>
                <td> JazzCash: </td>
                <td> <input type="text" name="jazzcash" class="form-control" value="<?php echo $jazzcash ?>"> </td>
              </tr>
              <tr>
                <td> Bank Account: </td>
                <td> <input type="text" name="bank" class="form-control" value="<?php echo $bank ?>"> </td>
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
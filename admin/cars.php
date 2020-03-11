<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Manage Cars </title>
  <?php include "include/head.php"?>

  <style type="text/css">
    .table th, .table td {
    font-size: 16px;
    font-weight: 100;
    padding: 10px 20px;

    vertical-align: middle;
}

  </style>



  <?php
  if(isset($_POST['card'])){

    $id=$_POST['card'];

  $image[0]='';
  $image[1]='';
  $image[2]='';
  $image[3]='';
  $image[4]='';
  $image[5]='';
  
  for ($n=0;$n<6;$n++) { 

  if(!empty($img = $_POST['img'.$n])) { 
   $img = $_POST['img'.$n]; 

  if (strpos($img, 'data:image/jpeg;base64,') === 0) {
      $img = str_replace('data:image/jpeg;base64,', '', $img); $ext = '.jpg';  }
  if (strpos($img, 'data:image/png;base64,') === 0) {
      $img = str_replace('data:image/png;base64,', '', $img);   $ext = '.png'; }
  $img = str_replace(' ', '+', $img);
  $data = base64_decode($img);
  $image[$n] = md5(uniqid()).'1.png';
  $file = '../images/cars/'.$image[$n];
  if (file_put_contents($file, $data)) $msg='Succesful';
  
  if($n==5){
  $data=mysqli_query($con,"UPDATE car SET `insr`='$image[$n]' where `id`='$id'")or die( mysqli_error($con) );

  }else{
  $data=mysqli_query($con,"UPDATE car SET `img$n`='$image[$n]' where `id`='$id'")or die( mysqli_error($con) );
}
  }
}

  
    if(isset($_POST['feat'])){
      $feat=1;
    }else { $feat=0;  } 


    $data=mysqli_query($con,"UPDATE car SET `feat`='$feat' where `id`='$id'")or die( mysqli_error($con) );



    $sql = "UPDATE car SET 
    `name` = '".mysqli_real_escape_string($con,$_POST['name'])."',
    `brand` = '".mysqli_real_escape_string($con,$_POST['brand'])."',
    `model` = '".mysqli_real_escape_string($con,$_POST['model'])."',
    `engine` = '".mysqli_real_escape_string($con,$_POST['engine'])."',
    `fuel` = '".mysqli_real_escape_string($con,$_POST['fuel'])."',
    `millage` = '".mysqli_real_escape_string($con,$_POST['millage'])."',
    `trans` = '".mysqli_real_escape_string($con,$_POST['trans'])."',
    `dist` = '".mysqli_real_escape_string($con,$_POST['dist'])."',
    `color` = '".mysqli_real_escape_string($con,$_POST['color'])."',
    `price` = '".mysqli_real_escape_string($con,$_POST['price'])."',
    `due` = '".mysqli_real_escape_string($con,$_POST['due'])."',
    `docd` = '".mysqli_real_escape_string($con,$_POST['docd'])."',
    WHERE `id` =$id ";
      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));

  $msg="Added" ;    
}

?>


  <?php 


    if(isset($_GET['del'])){
      $msg="Unsuccessful" ;

      $id=$_GET['del'];

      $sql = "DELETE FROM car WHERE id=$id  ";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));

      if(empty($msg))  $msg="Deleted";

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



<?php if(!empty($_GET['id'])){ ?>

  <?php $id=$_GET['id']; ?>
    <div class="container">
    <br><br>
   <table class="table table-bordered">
   <?php
      $n=8;

      $rows =mysqli_query($con,"SELECT * FROM car where id=$id " ) or die(mysqli_error($con));

      while($row=mysqli_fetch_array($rows)){

        $id = $row['id']; 
        $name = $row['name']; 
        $brand = $row['brand']; 
        $model = $row['model']; 
        $img0 = $row['img0']; 
        $img1 = $row['img1']; 
        $img2 = $row['img2']; 
        $img3 = $row['img3']; 
        $img4 = $row['img4']; 
        $engine = $row['engine']; 
        $enginec = $row['enginec']; 
        $fuel = $row['fuel']; 
        $millage = $row['millage']; 
        $trans = $row['trans']; 
        $gears = $row['gears']; 
        $dist = $row['dist']; 
        $color = $row['color']; 
        $price = $row['price']; 
        $insr = $row['insr']; 
        $due = $row['due']; 
        $docd = $row['docd']; 
        $book = $row['book']; 
        $feat = $row['feat']; 
        $dates = $row['dates']; 
        $datec = $row['datec']; 


        ?>

      <tbody>
        <form method="post" action="" enctype="multipart/form-data">

          <tr>
            <td style="max-width: 200px;">

           
                    <div class="tab-content px-1 pt-1">

                      <div role="tabpanel" class="tab-pane active" id="tab0" aria-expanded="true" aria-labelledby="base-tab0">
            
            <a href="../images/cars/<?php echo $img0 ?>" target="blank"> <img style="width:250px;height: 150px; " src="../images/cars/<?php echo $img0 ?>" class="" ?> </a>

            <input id="inp_file0" type="file" class="form-control"   accept="image/*" >
            <input id="inp_img0" name="img0" type="hidden" value="">

                      </div>



                <?php for($n=1;$n<5;$n++) { ?>

                      <div class="tab-pane" id="tab<?php echo $n; ?>" aria-labelledby="base-tab<?php echo $n; ?>" style="min-height: 200px;">
 

                        <?php if($n==1){ ?>
                       <?php if(!empty($img1)){ ?>
                    <a href="../images/cars/<?php echo $img1  ?>" target="blank"> <img style="width:250px;height: 150px; " src="../images/cars/<?php echo $img1 ?>" class="" ?> </a>
                      <?php } } else if($n==2) {?>
                      <?php if(!empty($img2)){ ?>
                    <a href="../images/cars/<?php echo $img2  ?>" target="blank"> <img style="width:250px;height: 150px; " src="../images/cars/<?php echo $img2 ?>" class="" ?> </a>

                      <?php } } else if($n==3) {?>
                      <?php if(!empty($img3)){ ?>
                    <a href="../images/cars/<?php echo $img3  ?>" target="blank"> <img style="width:250px;height: 150px; " src="../images/cars/<?php echo $img3 ?>" class="" ?> </a>

                      <?php } } else if($n==4) {?>
                      <?php if(!empty($img4)){ ?>
                    <a href="../images/cars/<?php echo $img4  ?>" target="blank"> <img style="width:250px;height: 150px; " src="../images/cars/<?php echo $img4 ?>" class="" ?> </a>
                  <?php }} ?>

            <input id="inp_file<?php echo $n; ?>" type="file" class="form-control"  accept="image/*" >
            <input id="inp_img<?php echo $n; ?>" name="img<?php echo $n; ?>" type="hidden" value="">

                      </div>

                      <?php } ?>                      


                    </div>
                    <br>

                       <ul class="nav nav-tabs">

                      <li class="nav-item">
                        <a class="nav-link active" id="base-tab0" data-toggle="tab" aria-controls="tab0"
                        href="#tab0" aria-expanded="true">Main Image</a>
                      </li>
                <?php for($n=1;$n<5;$n++) { ?>

                      <li class="nav-item">
                        <a class="nav-link" id="base-tab<?php echo $n; ?>" data-toggle="tab" aria-controls="tab<?php echo $n; ?>" href="#tab<?php echo $n; ?>"
                        aria-expanded="false"><?php echo $n ?></a>
                      </li>
                    <?php } ?>


                </ul> 

            </td>

            <td> 
              <table class="table">
                <tr>
                <td>
              Brand :    

                    </td>
                    <td> 
                      <select class="select2 form-control" name="brand" >
                              <?php 
      $rows =mysqli_query($con,"SELECT * FROM brands" ) or die(mysqli_error($con));
      while($row=mysqli_fetch_array($rows)){
        $cid = $row['id']; 
        $bname = $row['name'];  ?>
                              <option <?php if($cid==$brand) echo "selected"; ?> style="text-transform: capitalize;" value="<?php echo $cid ?>"><?php echo $bname ?></option>
                              <?php } ?>
                            </select>
                  </td>
                </tr>

              <tr>
                <td>
              Name:   <br>
                </td>
                <td>
                <input type="text" class="form-control" name="name" value="<?php echo $name ?>" required="">

                </td>
              </tr>
              
                <tr>
                     <td>
                  Model:
                  </td>
                  <td>
              
                  <input type="number" class="form-control" name="model" value="<?php echo $model ?>" required="">
                  </td>
                </tr>
              
                <tr>
                     <td>
                  Price:
                  </td>
                  <td>
              
                  <input type="number" class="form-control" name="price" value="<?php echo $price ?>" required="">
                  </td>
                </tr>


               <tr>
                <td>
              Color:     

                    </td>
                    <td> 
                      <select class="select2 form-control" name="color" style="text-transform: capitalize;"  >
                              <?php 
      $rows =mysqli_query($con,"SELECT * FROM color" ) or die(mysqli_error($con));
      while($row=mysqli_fetch_array($rows)){
        $cid = $row['id']; 
        $bname = $row['name'];  ?>
                              <option <?php if($cid==$color) echo "selected"; ?> style="text-transform: capitalize;" value="<?php echo $cid ?>"><?php echo $bname ?></option>
                              <?php } ?>
                            </select>
                  </td>
                </tr>


              </table>
            </td>
          </tr>


        <tr>
          <td>
            Engine:
            </td>
            <td>
        
            <input type="number" class="form-control" name="engine" value="<?php echo $engine ?>" required=""  style="width: 100px;float: left">
            <span style="font-size: 24px;font-weight: 200"> &nbsp;CC</span>
            </td>
          </tr>

        <tr>
          <td>
            Fuel:
            </td>
            <td>
                  <select class="form-control" name="fuel" style="text-transform: capitalize;">
                      <option <?php if($fuel=='cng') echo 'selected' ?> value="cng">CNG </option>
                      <option <?php if($fuel=='petrol') echo 'selected' ?> value="petrol">Petrol </option>
                      <option <?php if($fuel=='diesel') echo 'selected' ?> value="diesel">Diesel </option>
                    </select>
            </td>
          </tr>

        <tr>
          <td>
            Millage:
            </td>
            <td>
        
            <input type="number" class="form-control" name="millage" value="<?php echo $millage ?>" required=""  style="width: 100px;float: left">
            <span style="font-size: 24px;font-weight: 200"> &nbsp;KM/L</span>
            </td>
          </tr>


                        <tr>
                          <td> Transmission: </td>
                          <td>

                            <select class="form-control" name="trans" style="text-transform: capitalize;">
                              <option <?php if($trans=='manual') echo 'selected' ?>  value="manual">Manual </option>
                              <option <?php if($trans=='auto') echo 'selected' ?>  value="auto">Automatic </option>

                            </select>

                          </td>

                        </tr>


        <tr>
          <td>
            Distance:
            </td>
            <td>
        
            <input type="number" class="form-control" name="dist" value="<?php echo $dist ?>" required=""  style="width: 100px;float: left">
            <span style="font-size: 24px;font-weight: 200"> &nbsp;KMs</span>
            </td>
          </tr>


        <tr>
          <td>
            Insurance Papers:
            </td>
            <td>
                           <a href="../images/cars/<?php echo $insr ?>" target="blank"> <img style="width:200px;height: 200px; " src="../images/cars/<?php echo $insr ?>" class="" ?> </a>

            <input id="inp_file5" type="file" class="form-control"   accept="image/*" >
            <input id="inp_img5" name="img5" type="hidden" value="">


            </td>
          </tr>



        <tr>
          <td>
            Insurance Due Date:
            </td>
            <td>
        
            <input type="date" class="form-control" name="due" value="<?php echo $due ?>" required="">
            </td>
          </tr>



        <tr>
          <td>
            Documents Renewal Date:
            </td>
            <td>
        
            <input type="date" class="form-control" name="docd" value="<?php echo $docd ?>" required="">
            </td>
          </tr>



        <tr>
          <td>
            Feature on Homepage:
            </td>
        
            <td >
              <input type="checkbox" class="form-control" name="feat" <?php if($feat==1) echo 'checked'; ?>  >
            </td>

          </tr>



          <tr>
            <td colspan="2">

              <div class="text-center">

                <button type="submit" value="<?php echo $id ?>" name="card" class="btn btn-info"> <i class="fa fa-plus"></i> Save</button>

              </div>
            </td>
          </tr>

        </form>
      </tbody>
    </table>

</div>


    <br>
    <hr>
    <br>
<?php } if(empty($name)) echo 'Not Found'; } ?>






                  <br><br>



  <table class="table table-striped table-bordered zero-configuration">
    <thead>
      <th>
       ID
     </th>
      <th>
       Name
     </th>

     <th>
       Model 
     </th>
    <th>
      Image:
    </th>
    <th style="width:;">
      Price:
    </th>
    <th style="width:;">
      F:
    </th>
    <th style="width:;">
      Status:
    </th>
    <th class="hidden-xs">
      Edit
    </th>              

  </thead>
    <tbody>

      <?php

      $rows =mysqli_query($con,"SELECT * FROM car ORDER BY id desc LIMIT 1000 " ) or die(mysqli_error($con));
      $n=0;
      while($row=mysqli_fetch_array($rows)){


        $id = $row['id']; 
        $name = $row['name']; 
        $brand = $row['brand']; 
        $model = $row['model']; 
        $img = $row['img0']; 
        $price = $row['price']; 
        $book = $row['book']; 
        $feat = $row['feat']; 
        $datec = $row['datec']; 


        ?>

          <tr>
            <td>
              <?php echo $id ?>
            </td>
            <td>
<?php   $rowsx =mysqli_query($con,"SELECT name FROM brands WHERE id=$brand LIMIT 1" ) or die(mysqli_error($con));
       while($rowx=mysqli_fetch_array($rowsx)){
        echo $rowx['name']; } ?>



              <?php echo $name ?>
            </td>

            <td>
              <?php echo $model ?>

            </td>
            <td>

              
              <img style="width:80px;height: 50px; " src="../images/cars/<?php echo $img ?>" class="" ?><br>
          

            </td>
            <td>
              <?php echo $price ?>

            </td>

            <td>
              <?php echo $feat ?>

            </td>

            <td>
              <?php if($book==0) echo "Avaliable"; else echo "Booked"; ?>

            </td>
        


            <td>

              <div class="btn-group">

                <a class="btn btn-success" href="?id=<?php echo $id ?>"> <i class="fa fa-eye"></i>View / Edit</a>


                <a class="btn btn-danger" href="?del=<?php echo $id ?>"> <i class="fa fa-eye"></i>Del</a>




              </div>
            </td>
          </tr>


        <?php $n++; } ?>


      </tbody>
    </table>


        </div>
      </div>
    </div>

  </div>
</div>



 <?php for ($n=0;$n<6;$n++) { ?>
<script>
   function fileChange(e) { 
     document.getElementById('inp_img<?php echo $n; ?>').value = '';
     var file = e.target.files[0];
      if (file.type == "image/jpeg" || file.type == "image/png") {         var reader = new FileReader();  
        reader.onload = function(readerEvent) {
              var image = new Image();
           image.onload = function(imageEvent) {    
              var max_size = 600;
              var w = image.width;
              var h = image.height;             
              if (w > h) {  if (w > max_size) { h*=max_size/w; w=max_size; }
              } else     {  if (h > max_size) { w*=max_size/h; h=max_size; } }             
              var canvas = document.createElement('canvas');
              canvas.width = w;
              canvas.height = h;
              canvas.getContext('2d').drawImage(image, 0, 0, w, h);                 
              if (file.type == "image/jpeg") {
                 var dataURL = canvas.toDataURL("image/jpeg", 1.0);
              } else {
                 var dataURL = canvas.toDataURL("image/png");   
              }
              document.getElementById('inp_img<?php echo $n; ?>').value = dataURL;  }
           image.src = readerEvent.target.result;  }
        reader.readAsDataURL(file);} else {
        document.getElementById('inp_file<?php echo $n; ?>').value = ''; 
        alert('Please only select images in JPG- or PNG-format.');  } }
  document.getElementById('inp_file<?php echo $n; ?>').addEventListener('change', fileChange, false);      
</script>

<?php } ?>
 



<?php include "include/footer.php"?>


</body>
</html>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Add New Car </title>
  <?php include "include/head.php"?>

  <style type="text/css">
    .table th, .table td {
    font-size: 20px;
    font-weight: 100;
}

  </style>



  <?php
  if(isset($_POST['add'])){




  $image[0]='';
  $image[1]='';


  
  for ($n=0;$n<2;$n++) { 

  if(!empty($_POST['img'.$n])) { 
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
  }
}
    $book=0;
    $datec=date('Y-m-d');
    $data=mysqli_query($con,"INSERT INTO car 
    (`name`,`brand`,`model`,`img0`,`engine`,`fuel`,`millage`,`trans`,`dist`,`color`,`price`,`insr`,`due`,`docd`,`book`,`datec`) 
    VALUES 
    ( '".mysqli_real_escape_string($con,$_POST['name'])."' 
    , '".mysqli_real_escape_string($con,$_POST['brand'])."'
    , '".mysqli_real_escape_string($con,$_POST['model'])."'
    , '".mysqli_real_escape_string($con,$image[0])."'
    , '".mysqli_real_escape_string($con,$_POST['engine'])."'
    , '".mysqli_real_escape_string($con,$_POST['fuel'])."'
    , '".mysqli_real_escape_string($con,$_POST['millage'])."'
    , '".mysqli_real_escape_string($con,$_POST['trans'])."'
    , '".mysqli_real_escape_string($con,$_POST['dist'])."'
    , '".mysqli_real_escape_string($con,$_POST['color'])."'
    , '".mysqli_real_escape_string($con,$_POST['price'])."'
    , '".mysqli_real_escape_string($con,$image[1])."'
    , '".mysqli_real_escape_string($con,$_POST['due'])."'
    , '".mysqli_real_escape_string($con,$_POST['docd'])."'
    , '".mysqli_real_escape_string($con,$book)."'
    , '".mysqli_real_escape_string($con,$datec)."'


    )")or die( mysqli_error($con) );



      $rows =mysqli_query($con,"SELECT id FROM car ORDER BY id desc LIMIT 1" ) or die(mysqli_error($con));
      while($row=mysqli_fetch_array($rows)){
        $cid = $row['id']; }

  header("location:cars.php?id=$cid"); // Redirecting To Other Page
  
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



                  <br><br>
                  <table class="table table-bordered">

                    <thead>
                      <tr><td style="width: 350px;border-right: 2px white solid; font-weight: 600">New Car Form:</td><td></td></tr>
                    </thead>
                    <tbody>
                      <form method="post" action="" enctype="multipart/form-data">

                        <tr>
                          <td>Car Name: </td>
                          <td>
                            <input type="text" class="form-control" name="name" placeholder="Civic Reborn" value="" required="">
                          </td>

                        </tr>

                        <tr>
                          <td> Brand </td>
                          <td>
                            <select class="select2 form-control" name="brand" >
                              <?php 
      $rows =mysqli_query($con,"SELECT * FROM brands" ) or die(mysqli_error($con));
      while($row=mysqli_fetch_array($rows)){
        $cid = $row['id']; 
        $name = $row['name'];  ?>
                              <option style="text-transform: capitalize;" value="<?php echo $cid ?>"><?php echo $name ?></option>
                              <?php } ?>
                            </select>
                          </td>
                        </tr>

                        <tr>
                          <td> Model: </td>
                          <td>
                            <input type="number" class="form-control" name="model" placeholder="2014" value="" required="">
                          </td>

                        </tr>

                        <tr>
                          <td>Car Main Image: </td>
                          <td>

        <input id="inp_file0" type="file" class="form-control" required=""  accept="image/*" >
        <input id="inp_img0" name="img0" type="hidden" value="">


                          </td>

                        </tr>
                        
                          <tr>
                          <td> Color: </td>
                          <td>
                            <select class="select2 form-control" style="text-transform: capitalize;" name="color" >
                              <?php 
      $rows =mysqli_query($con,"SELECT * FROM color" ) or die(mysqli_error($con));
      while($row=mysqli_fetch_array($rows)){
        $cid = $row['id']; 
        $name = $row['name'];  ?>
                              <option style="text-transform: capitalize;" value="<?php echo $cid ?>"><?php echo $name ?></option>
                              <?php } ?>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td> Engine: </td>
                          <td>
                            <input type="number" class="form-control" name="engine" value="" required="" style="width: 100px;float: left" placeholder="1500"><span style="font-size: 24px;font-weight: 200"> &nbsp;CC</span>                            
                          </td>

                        </tr>
                        <tr>
                          <td> Fuel Type: </td>
                          <td>
                            <select class="form-control" name="fuel" style="text-transform: capitalize;">
                              <option value="cng">CNG </option>
                              <option value="petrol">Petrol </option>
                              <option value="diesel">Diesel </option>
                            </select>

                          </td>

                        </tr>
                        <tr>
                          <td> Millage: </td>
                              <td>
                            <input type="number" class="form-control" name="millage" value="" required="" style="width: 100px;float: left" placeholder="12"><span style="font-size: 24px;font-weight: 200"> &nbsp;KM/L</span>                            
                                                    </td>

                        </tr>
                        <tr>
                          <td> Transmission: </td>
                          <td>

                            <select class="form-control" name="trans" style="text-transform: capitalize;">
                              <option value="manual">Manual </option>
                              <option value="auto">Automatic </option>

                            </select>

                          </td>

                        </tr>

                        <tr>
                          <td> Distance Covered: </td>
                          <td>
                            <input type="number" class="form-control" name="dist" value="" required="" style="width: 100px;float: left" placeholder="25000"><span style="font-size: 24px;font-weight: 200"> &nbsp;KM</span>                            
                          </td>

                        </tr>

                        <tr>
                          <td> Rent Per Day: </td>
                          <td>
                            <input type="number" class="form-control" name="price" value="" required="" style="width: 90%;float: right" placeholder="5000"><span style="font-size: 24px;font-weight: 200; max-width: 200px"> &nbsp;Rs. </span>                            
                          </td>

                        </tr>


                        <tr>
                          <td>Insurance Paper Image: </td>
                          <td>
                            
        <input id="inp_file1" type="file" class="form-control" required=""  accept="image/*" >
        <input id="inp_img1" name="img1" type="hidden" value="">

                          </td>

                        </tr>

                        <tr>
                          <td>Insurance Due Date: </td>
                          <td>
                            <input  value="<?php echo date('Y-m-d'); ?>" type="date" class="form-control" name="due" required="">
                          </td>

                        </tr>

                        <tr>
                          <td>Documents Renewal Date: </td>
                          <td>
                            <input value="<?php echo date('Y-m-d'); ?>" type="date" class="form-control" name="docd" required="">
                          </td>

                        </tr>


                        <tr>
                          <td colspan="2">

                            <div class="text-center">

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



 <?php for ($n=0;$n<3;$n++) { ?>
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
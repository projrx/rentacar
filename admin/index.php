<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Dashboard </title>
  <?php include "include/head.php"?>
</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

<?php $link='index'; ?>

  <?php include "include/header.php"?>


  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">

     
  <?php include "include/sidebar.php"?>


      <div class="content-body">

        <section>


         <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Notifications:</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse">-</a></li>
                      <li><a data-action="reload">o</a></li>
                      <li><a data-action="expand">[]</a></li>
                      <li><a data-action="close">x</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
                      <h2>Car Documents Renewal:</h2>



                      <table class="table table-striped">

                        <thead>
                          <tr>
                            <td>Name</td>
                            <td>Car Image</td>
                            <td>Documents Exipry Date</td>
                            <td>Rent Per Day</td>
                        </thead>

                        <tbody>

          <?php 

            $date= date("Y-m-d");

            //$tdate=strtotime($date);
            //$tdrlex=strtotime($drlex);
            //$newdate = $tdrlex-$tdate;
            //$newdate =  $newdate / (60*60*24) ;

      $rows =mysqli_query($con,"SELECT * FROM car where docd<'$date' " ) or die(mysqli_error($con));
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
        $dates = $row['dates']; 
        $datec = $row['datec'];
      ?>

          
          <tr>
              <td> 
                <a href="cars.php?id=<?php echo $id ?>">
                    <?php   $rowsx =mysqli_query($con,"SELECT name FROM brands WHERE id=$brand LIMIT 1" ) or die(mysqli_error($con));
       while($rowx=mysqli_fetch_array($rowsx)){
        echo $rowx['name']; } ?>

                    <?php echo $name ?></a>
                  </td>


                  <td>
                    <img src="../images/cars/<?php echo $img0 ?>" alt="Open Imagination" style="height: 30px;">
                  </td>

                  <td> <?php echo $docd ?> </td>

                  <td>
                    <span class="p-price t700 ls1">Rs. <?php echo number_format($price) ?> /Day</span>
                  </td>
                </tr>

            <?php }
             ?> 


            
            </tbody>
          </table>

          <br>
          <br>

                      <h2>Car Insurance Renewal:</h2>



                      <table class="table table-striped">

                        <thead>
                          <tr>
                            <td>Name</td>
                            <td>Car Image</td>
                            <td>Insurance Exipry Date</td>
                            <td>Rent Per Day</td>
                        </thead>

                        <tbody>

          <?php 

            $date= date("Y-m-d");

            //$tdate=strtotime($date);
            //$tdrlex=strtotime($drlex);
            //$newdate = $tdrlex-$tdate;
            //$newdate =  $newdate / (60*60*24) ;

      $rows =mysqli_query($con,"SELECT * FROM car where due<'$date' " ) or die(mysqli_error($con));
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
        $dates = $row['dates']; 
        $datec = $row['datec'];
      ?>

          
          <tr>
              <td> 
                <a href="cars.php?id=<?php echo $id ?>">
                    <?php   $rowsx =mysqli_query($con,"SELECT name FROM brands WHERE id=$brand LIMIT 1" ) or die(mysqli_error($con));
       while($rowx=mysqli_fetch_array($rowsx)){
        echo $rowx['name']; } ?>

                    <?php echo $name ?></a>
                  </td>


                  <td>
                    <img src="../images/cars/<?php echo $img0 ?>" alt="Open Imagination" style="height: 30px;">
                  </td>

                  <td> <?php echo $due ?> </td>

                  <td>
                    <span class="p-price t700 ls1">Rs. <?php echo number_format($price) ?> /Day</span>
                  </td>
                </tr>

            <?php }
             ?> 


            
            </tbody>
          </table>





                    </div>
                  </div>
                </div>
              </div>
            </section>


        
      </div>



    </div>
  </div>

  <?php include "include/footer.php"?>


</body>
</html>
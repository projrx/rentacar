<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Ongoing Orders </title>
  <?php include "include/head2.php"?>

  <style type="text/css">
    .table th, .table td {
    font-size: 14px;
    font-weight: 100;
    padding: 10px 10px;

    vertical-align: middle;
}

  </style>



  <?php
  if(isset($_POST['oid'])){

    $id=$_POST['oid'];
    $paid=$_POST['payment'];


        $rows =mysqli_query($con,"SELECT carid,days,paid FROM orders where id=$id" ) or die(mysqli_error($con));
        while($row=mysqli_fetch_array($rows)){
          $oldpaid = $row['paid'];
          $carid = $row['carid'];
          $days = $row['days'];}

          $newpaid=$oldpaid+$paid;


          $data=mysqli_query($con,"UPDATE orders SET `paid`='$newpaid'where `id`='$id'")or die( mysqli_error($con) );



    header("location:oorders.php"); // Redirecting To Other Page
}

?>


  <?php 


    if(isset($_GET['ter'])){
      $msg="Unsuccessful" ;

      $id=$_GET['ter'];
      $stotal=0;
        $rows =mysqli_query($con,"SELECT * FROM orders where id=$id" ) or die(mysqli_error($con));
        while($row=mysqli_fetch_array($rows)){
          $oldpaid = $row['paid'];
          $carid = $row['carid'];
          $days = $row['days']; 
          $status = $row['status']; 
          $paid = $row['paid'];
          $price = $row['price']; 


          $datebook = $row['datebook']; 
          $datestart = $row['datestart']; 
          $dateend = $row['dateend']; 

        }
            $total = $days*$price;
            $stotal = $stotal+$total;



            $date= date("Y-m-d");


            $caldatestart=strtotime($datestart);
            $caldate=strtotime($date);
            $newdate = $caldate-$caldatestart;
            $newdate =  $newdate / (60*60*24) ;

            $newdays = $newdate+1;

            $stotal = $price * $newdays;



            $status='terminated';



            $desp='Terminated By Admin.';


      $data=mysqli_query($con,"UPDATE orders SET `days`='$newdays',`total`='$stotal',`dateend`='$date',`desp`='$desp',`status`='$status' where `id`='$id'")or die( mysqli_error($con) );

      header("location:oorders.php"); // Redirecting To Other Page



    }


  ?>

</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

<?php $link='orders'; ?>

<?php include "include/header.php"?>


<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
  <div class="content-wrapper">


    <?php include "include/sidebar.php"?>


    <div class="content-body">
     
       <?php if(!empty($_GET['id'])) {
      $id=$_GET['id'];
     ?>
      <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Order Detail:</h4>
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

                      <h2 style="margin:1px;">A1CARS</h2>
                      <h5>Date:   <?php echo date('Y-m-d') ?></h5>

                      <br>
                     
                                <?php 

        $rows =mysqli_query($con,"SELECT * FROM orders where id=$id" ) or die(mysqli_error($con));
        $n=0;
        $stotal=0;

        while($row=mysqli_fetch_array($rows)){
            
            $stotal=0;
          $oid = $row['id']; 
          $pid = $row['carid']; 
          $ouserid = $row['userid']; 
          $qty = $row['days']; 
          $status = $row['status']; 
          $paid = $row['paid'];
            $price = $row['price'];  
            $total = $qty*$price;
            $stotal = $stotal+$total;

          $datebook = $row['datebook']; 
          $datestart = $row['datestart']; 
          $dateend = $row['dateend']; 


          $rowsx =mysqli_query($con,"SELECT * FROM car where id='$pid' " ) or die(mysqli_error($con));
          while($rowx=mysqli_fetch_array($rowsx)){

            $brand = $rowx['brand'];  
            $proname = $rowx['name']; 
            $img = $rowx['img0']; 
            }

          $rowsx =mysqli_query($con,"SELECT * FROM users where id='$ouserid' " ) or die(mysqli_error($con));
          while($rowx=mysqli_fetch_array($rowsx)){

            $ousername = $rowx['username'];  
            $oname = $rowx['name'];  
            $oemail = $rowx['email']; 
            $ophone = $rowx['phone']; 

            }
          }
          ?>

          <table class="table table-hover">
            <tbody>

    <tr>
      <td colspan="4"> <h4>Order Detail:</h4>
    </tr>
              <tr>
                  <td>Order ID: </td>
                <td>
                <span style="text-decoration: underline;"><?php echo $oid ?></span>
                </td>

                  <td>Order Date: </td>
                <td>
                <span style="text-decoration: underline;"><?php echo $datebook ?></span>
                </td>
          </tr>

    <tr>
      <td colspan="4"> <h4>Car Details:</h4>
    </tr>
          <tr>
            <td> Car Name </td>
                <td><a href="car.php?id=<?php echo $pid ?>">
                  <?php   
    $rowsxx =mysqli_query($con,"SELECT name FROM brands WHERE `id`='$brand' " ) or die(mysqli_error($con));
       while($rowxx=mysqli_fetch_array($rowsxx)){
        echo $rowxx['name']; } ?>
        <?php echo $proname ?>
          
        </a></td>
        

          <td>Car Image: </td>
                <td>

          <img style="height: 50px;width: 80px;" src="../images/cars/<?php echo $img ?>">

      </td>
    </tr>
    <tr>
      <td colspan="4"> <h4>User Details:</h4>
    </tr>
    <tr>
      <td>User Full Name:</td>
                <td style="text-transform: capitalize;"> <?php echo $oname ?> </td>
          

        <td>Username:</td>
                <td> <?php echo $ousername ?> </td>
              </tr>
    <tr>
      <td>User Email:</td>
                <td style="text-transform:;"> <?php echo $oemail ?> </td>
          

        <td>User Phone:</td>
                <td> <?php echo $ophone ?> </td>
              </tr>

    <tr>
      <td colspan="4"> <h4>Order Status:</h4>
    </tr>


    <tr>
      <td>Order Status:</td>
                <td style="text-transform: capitalize;"> <?php echo $status ?> </td>
          

        <td>Booking Date:</td>
                <td> <?php echo $datebook ?> </td>
              </tr>
    <tr>
      <td>Starting Date:</td>
                <td style="text-transform:;"> <?php echo $datestart ?> </td>
          

        <td>Ending Date:</td>
                <td> <?php echo $dateend ?> </td>
              </tr>

    <tr>


      <td colspan="4"> <h4>Payment Details:</h4>
    </tr>

 
    <tr>
      <td>Totat Days: </td><td>  <?php echo ($qty) ?> </td>
      
      
      <td><td>

                </tr>
    <tr>
      
      
      <td>Rent Per Day: </td><td> Rs. <?php echo number_format($price) ?>/- </td>
      <td><td>

                </tr>
    <tr>
      <td>Total Dues: </td>
                <td>Rs. <?php echo number_format($stotal) ?>/- </td>
      
      
      <td>Paid Dues:
                <td>Rs. <?php echo number_format($paid) ?>/- </td>

                </tr>

                <tr>
            </tbody>

          </table>

                    </div>

                  </div>
                </div>
              </div>

          <?php } ?>

 
       <?php if(!empty($_GET['pay'])) {
      $id=$_GET['pay'];
     ?>
      <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Order Detail:</h4>
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

                      <h2 style="margin:1px;">A1CARS</h2>
                      <h5>Date:   <?php echo date('Y-m-d') ?></h5>

                      <br>
                     
                                <?php 

        $rows =mysqli_query($con,"SELECT * FROM orders where id=$id" ) or die(mysqli_error($con));
        $n=0;
        $stotal=0;

        while($row=mysqli_fetch_array($rows)){
            
            $stotal=0;
          $oid = $row['id']; 
          $pid = $row['carid']; 
          $ouserid = $row['userid']; 
          $qty = $row['days']; 
          $status = $row['status']; 
          $paid = $row['paid'];
            $price = $row['price'];  
            $total = $qty*$price;
            $stotal = $stotal+$total;

          $datebook = $row['datebook']; 
          $datestart = $row['datestart']; 
          $dateend = $row['dateend']; 


          $rowsx =mysqli_query($con,"SELECT * FROM car where id='$pid' " ) or die(mysqli_error($con));
          while($rowx=mysqli_fetch_array($rowsx)){

            $brand = $rowx['brand'];  
            $proname = $rowx['name']; 
            $img = $rowx['img0']; 
            }

          $rowsx =mysqli_query($con,"SELECT * FROM users where id='$ouserid' " ) or die(mysqli_error($con));
          while($rowx=mysqli_fetch_array($rowsx)){

            $ousername = $rowx['username'];  
            $oname = $rowx['name'];  
            $oemail = $rowx['email']; 
            $ophone = $rowx['phone']; 

            }
          }
          ?>

          <table class="table table-hover">
            <tbody>

    <tr>
      <td colspan="4"> <h4>Order Detail:</h4>
    </tr>
              <tr>
                  <td>Order ID: </td>
                <td>
                <span style="text-decoration: underline;"><?php echo $oid ?></span>
                </td>

                  <td>Order Date: </td>
                <td>
                <span style="text-decoration: underline;"><?php echo $datebook ?></span>
                </td>
          </tr>
      
    <tr>
      <td>Order Status:</td>
                <td style="text-transform: capitalize;"> <?php echo $status ?> </td>
          

        <td>Booking Date:</td>
                <td> <?php echo $datebook ?> </td>
              </tr>
    <tr>
      <td>Starting Date:</td>
                <td > <?php echo $date= date("Y-m-d"); ?> </td>
          

        <td>Ending Date:</td>
                <td> <?php echo date('Y-m-d', strtotime($date. ' + '.$qty.' days')); ?> </td>
              </tr>

    <tr>


      <td colspan="4"> <h4>Payment Details:</h4>
    </tr>

 
    <tr>
      <td>Totat Days: </td><td>  <?php echo ($qty) ?> </td>
      
      
      <td><td>

                </tr>
    <tr>
      
      
      <td>Rent Per Day: </td><td> Rs. <?php echo number_format($price) ?>/- </td>
      <td><td>

                </tr>
    <tr>
      <td>Total Dues: </td>
                <td>Rs. <?php echo number_format($stotal) ?>/- </td>
      
      
      <td>Paid Dues:
                <td>Rs. <?php echo number_format($paid) ?>/- </td>

                </tr>

                <tr>
                  <td colspan="4">
                  <form action="" method="POST">
                    <bR>
                    <h3>Enter Payment to Add to Inovice </h3>
                    <spna>To Add Payment Return or to Lessen the Paid Amount enter Negative (-) Amount Like: -5000 </spna>
                    <br>
                    <br>
                
                  <center>  
                      <input style="max-width: 300px;" type="number"  name="payment" class="form-control" placeholder="<?php echo $stotal ?>">
                      <br>
                      <button class="btn btn-info" type="submit" name="oid" value="<?php echo $oid ?>">
                        Add and Confirm 
                      </button>


                  </center>
                  </form>
                  </td>
                </tr>
            </tbody>

          </table>

                    </div>

                  </div>
                </div>
              </div>

          <?php } ?>


     
     <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Order Detail:</h4>
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


                  <br><br>

          <label class="lead color">Ongoing Orders:</label>

            <table id="pending" class="display" cellspacing="0" width="100%">
              <thead>
              <tr>

                <th>#</th>
                <th>Car</th>
                <th>Img</th>
                <th>Price</th>
                <!-- <th>Days</th>
                <th>Total</th> -->
                <th>Paid</th>
                <th>Date Start</th>
                <th>Date End</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>

                <?php 

        $rows =mysqli_query($con,"SELECT * FROM orders where status='ongoing' LIMIT 1000" ) or die(mysqli_error($con));
        $n=0;
        $stotal=0;

        while($row=mysqli_fetch_array($rows)){

          $oid = $row['id']; 
          $pid = $row['carid']; 
          $qty = $row['days']; 
          $status = $row['status']; 

            $paid = $row['paid'];  
            $datec = $row['datebook']; 
            $dates = $row['datestart']; 
            $datee = $row['dateend']; 


          $rowsx =mysqli_query($con,"SELECT * FROM car where id='$pid' " ) or die(mysqli_error($con));
          while($rowx=mysqli_fetch_array($rowsx)){

             $stotal=0;
            $price = $rowx['price'];  
            $brand = $rowx['brand'];  
            $proname = $rowx['name']; 
            $img = $rowx['img0']; 
            $total = $qty*$price;
            $stotal = $stotal+$total;
          

          ?>
              <tr>
          <a  href="orders.php?id=<?php echo $oid ?>">

                <td>
                <a  href="orders.php?id=<?php echo $oid ?>"><h5 style="text-decoration: underline;"><?php echo $oid ?></h5></a>
                </td>

                <td><a href="car.php?id=<?php echo $pid ?>">
                  <?php   
    $rowsxx =mysqli_query($con,"SELECT name FROM brands WHERE `id`='$brand' " ) or die(mysqli_error($con));
       while($rowxx=mysqli_fetch_array($rowsxx)){
        echo $rowxx['name']; } ?>
        <?php echo $proname ?>
          
        </a></td>
                <td>

          <img style="height: 50px;width: 80px;" src="../images/cars/<?php echo $img ?>">

      </td>

            <!--
                <td>Rs. <?php echo number_format($price) ?>/- </td>
                <td><?php echo number_format($qty) ?></td>

-->

                <td>Rs. <?php echo number_format($stotal) ?>/- </td>
                <td>Rs. <?php echo number_format($paid) ?>/- </td>
                <td> <?php echo $dates ?> </td>
                <td> <?php echo $datee ?> </td>



                <td> 
                  <div class="btn-group">
                  <a class="btn btn-success" href="?id=<?php echo $oid ?>">View</a>
                  <?php if($stotal!=$paid) { ?>
                  <a class="btn btn-primary" href="?pay=<?php echo $oid ?>">Payment</a>
                <?php } ?>
                  <a class="btn btn-danger" href="?ter=<?php echo $oid ?>">Terminate</a>
                </div>
                 </td>
            </a>

              </tr>

            <?php }}  ?>

              </tbody>
            </table>
            <span>*Terminating Account Now will Set the End Date of Today and will Recalculate the Days and Total Price Regardless of Paid Price.

            </span>

<br>
<br>

        </div>
      </div>
    </div>

  </div>
</div>




<?php include "include/footer2.php"?>

<script type="text/javascript">
  
  $(document).ready(function() {
    $('#pending').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
  
</script>


</body>
</html>
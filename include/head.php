<?php include 'include/connect.php'; ?>  


	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Hamza Pervaiz" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<!-- Stylesheets
	============================================= -->

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />


	<!-- Page Level Stylesheets
	============================================= -->


	<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />


	<link rel="stylesheet" href="css/icons/style.css" type="text/css" />
	<link rel="stylesheet" href="css/car.css" type="text/css" />

	<link rel="stylesheet" href="mystyle.css" type="text/css" />



<link rel="stylesheet" type="text/css"  href="dt/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css"  href="dt/buttons.dataTables.min.css" />



<?php

    $rows =mysqli_query($con,"SELECT * FROM contact where id=1 " ) or die(mysqli_error($con));
    

    while($row=mysqli_fetch_array($rows)){


      $sitename = $row['name'];  
      $sitelogo = $row['logo'];  
      $sitephone = $row['phone'];  
      $sitemail = $row['email'];  
      $siteaddress = $row['address']; 

      $facebook = $row['facebook'];  
      $linkedin = $row['linkedin'];  
      $insta = $row['insta'];  
      $youtube = $row['youtube'];  
    }

    ?>	










    <?php
      if(isset($_POST['book'])){
        $msg="Unsuccessful" ;
        
        if(empty($userid)) {
            header('location:login.php');
            
            
        }else{



        $pid=$_POST['book'];
        $qty=$_POST['qty'];
        $status='cart';


        $rows =mysqli_query($con,"SELECT price FROM car where id='$pid' " ) or die(mysqli_error($con));
        $n=0;
        while($row=mysqli_fetch_array($rows)){
          $price = $row['price']; 
	    }


	    $total=$price*$qty;
	    $datec=date('Y-m-d');



        $rows =mysqli_query($con,"SELECT id,days FROM orders where carid='$pid' AND status='$status' AND userid='$userid'" ) or die(mysqli_error($con));
        $n=0;
        while($row=mysqli_fetch_array($rows)){
          $eid = $row['id']; 
          $eqty = $row['days']; 
          $newqty=$eqty+$qty;
	    $total=$price*$newqty;


          $sql = "UPDATE orders SET `days` = '$newqty',`total` = '$total' WHERE `id` =$eid";
          mysqli_query($con, $sql) ;
      }




      if(empty($eid)){
    
    $data=mysqli_query($con,"INSERT INTO orders (userid,carid,status,days,price,total,datebook,dates)VALUES ('$userid','$pid','$status','$qty','$price','$total','$datec','$datec')")or die( mysqli_error($con) );

    }
        ($msg=mysqli_error($con));
        if(empty($msg))  $msg="Added To Cart";
      

}
}


?>


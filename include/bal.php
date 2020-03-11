
						<?php 
			$rows =mysqli_query($con,"SELECT * FROM orders where status!='cart' AND userid='$userid'" ) or die(mysqli_error($con));

		  	$bal=0;

		  	while($row=mysqli_fetch_array($rows)){
		  	  $b=0;
		  	  $oid = $row['id']; 
		  	  $total = $row['total']; 
		  	  $paid = $row['paid']; 

		  	   $b=$total-$paid;
		  	   $bal=$bal+$b;

		  	}

		  	echo number_format($bal);
		  	if($bal>0) echo " Cr."; else echo "Dr.";;

						 ?>
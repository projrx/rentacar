

					<ul class="list-group">
						<li class="list-group-item">
							<a href="dashboard.php" >Dashoard</a>


						</li>
						<li class="list-group-item ">
							<a href="profile.php" >Profile</a>
						</li>
						<li class="list-group-item">
							<a href="notifications.php" >Notifications</a>
											<?php 

      $rows =mysqli_query($con,"SELECT * FROM users where id='$userid' " ) or die(mysqli_error($con));
      while($row=mysqli_fetch_array($rows)){ 
        $drlex = $row['drlex']; 
    }

                $date= date("Y-m-d");

            $tdate=strtotime($date);
            $tdrlex=strtotime($drlex);
            $newdate = $tdrlex-$tdate;
            $newdate =  $newdate / (60*60*24) ;
            if($tdrlex<$tdate){ ?>

							<span class="badge badge-secondary float-right" style="margin-top: 3px;">1</span>
						<?php } ?>

						</li>
						<li class="list-group-item">
							<a href="orders.php" >Orders</a>

						</li>
						<li class="list-group-item">
							<a href="history.php" >History</a>

						</li>

						<li class="list-group-item">
							<a href="index.php" >Logout</a>

						</li>
					</ul>
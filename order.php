<?php
	session_start();
		
	include 'admin/conect.php';
	if(isset($_SESSION['login'])){
	$op=$_SESSION['login'];
	$sql="SELECT * FROM booking b JOIN addevent a ON b.eventid=a.id where b.userid='".$op."' ";
		$result=mysqli_query($database,$sql);
		print_r($result);
		//$order =mysqli_fetch_array($result);
		//print_r($order);
	}
		
	
?>

<html>
	<head>
		<title>bookmyshow</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include 'includes/head.php'; ?>		
	</head>
	<body>
		<?php include 'includes/nav.php';
		
		?>
		<section>
			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<table class="table table-dark table-striped">
    <thead>
				 <tr>
		<th>I D</th>
        <th>event_name</th>
        <th>location</th>
        <th>price</th>
		<th>quntity</th>
		<th>start date</th>
		<th>end date</th>
		<th>gst</th>
		<th>total</th>
		<th>Action</th>
		
 		
      </tr>
    </thead>
	
    <tbody>
					<?php while($order = mysqli_fetch_array($result)){
						//print_r($sqlorder);
						?>
							
      <tr>
		<td><?php echo $order['bookingid']?></td>
        <td><?php echo $order['name'] ?></td>
        <td><?php echo $order['location'] ?></td>
        <td><?php echo $order['price'] ?></td>
		<td><?php echo $order['quntity'] ?></td>
		<td><?php echo $order['startdate'] ?></td>
        <td><?php echo $order['enddate'] ?></td>
        <td><?php echo $order['gst'] ?></td>
		<td><?php echo $order['total'] ?></td>
		<td><a href="admin/ajax/order_delete.php?delete=<?php echo $order['bookingid']?>" class="btn btn-danger">delete</a></td>
      </tr>
      
						
						
						
						<?php
					}?>
							
     
    </tbody>
  </table>
					</div>
				</div>
			
			</div>
		</section>
		
		
		
		<?php include 'includes/foot.php'; ?>
	</body>
</html>

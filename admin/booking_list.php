<?php 
include 'conect.php';
session_start();
	if(!isset($_SESSION['admin'])){
	header("Location:panel_login.php");
	}
	//$oh=$_SESSION['admin'];
	
	
	
	
	$sqlbook = 'select * from booking';
	$bookresult = mysqli_query($database, $sqlbook);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <?php include 'includes/head.php'; ?>
</head>

<body>
  <?php include 'includes/sidebar.php'; ?>
  
  <div class="main-content" id="panel">
  <?php include 'includes/header.php'; ?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Booking</h3>
				  <?php// print_r($oh);?>
                </div>
                <div class="col text-right">
                  
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
					<th scope="col">Booking_ID</th>
                    <th scope="col">Event_ID</th>
					<th scope="col">User_ID</th>
					<th scope="col">Quntity</th>
					<th scope="col">Price</th>
					<th scope="col">GST</th>
					<th scope="col">Total</th>
					<th scope="col">Status</th>
					<th scope="col">Created Date</th>
					<th scope="col">Action</th>
					
				  </tr>
                </thead>
                <tbody>
				<?php 
				while($booking = mysqli_fetch_array($bookresult)){
					//print_r($booking);
				?>
                  <tr>
					<td><?php echo $booking['bookingid']?></td>
                    <td><?php echo $booking['eventid'] ?></td>
					<td><?php echo $booking['userid'] ?></td>
					<td><?php echo $booking['quntity'] ?></td>
					<td><?php echo $booking['price']?></td>
                    <td><?php echo $booking['gst'] ?></td>
					<td><?php echo $booking['total'] ?></td>
					<td><?php echo $booking['status'] ?></td>
					<td><?php echo $booking['createddate'] ?></td>
					
					
					
					
					</td>
                  </tr>
				<?php } ?>
				  
                </tbody>
              </table>
            </div>
           </div>
			</div>
		</div>
	</div>
				

  <?php include 'includes/foot.php'; ?>
		<script>
		$("#")
		
		
		</script>
</body>
</html>

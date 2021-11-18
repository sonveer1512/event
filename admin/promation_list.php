<?php 
	include 'conect.php';
	session_start();
	//session_start();
if(!isset($_SESSION['admin'])){
		header('location:panel_login.php');
	}
	$sqlpro = 'select * from promation';
	$proresult = mysqli_query($database, $sqlpro);
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
                  <h3 class="mb-0">Promation_list</h3>
                </div>
                <div class="col text-right">
                  <a href="add-promation.php" class="btn btn-sm btn-primary">ADD</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
					<th scope="col">promation_id</th>
                    <th scope="col">promation_Name</th>
					<th scope="col">promation_url</th>
					<th scope="col">promation_image</th>
					<th scope="col">Status</th>
					<th scope="col">Created Date</th>
					<th scope="col">Action</th>
				  </tr>
                </thead>
                <tbody>
				<?php 
				while($row = mysqli_fetch_array($proresult)){
					//print_r($row);
				?>
                  <tr>
					<td><img src=" <?php echo 'images/admin_image/' .$row['p_Dimage']?>" style="width:100px;  border-radius: 25px;"></td>
					<td><?php echo $row['p_ID']?></td>
                    <td><?php echo $row['p_name'] ?></td>
					<td><?php echo $row['p_url'] ?></td>
					<td><?php echo $row['p_Dimage'] ?></td>
					<td><?php echo $row['status']?></td>
					<td><?php echo $row['create_date']?></td>
					
					<td><a href="add-promation.php?id=<?php echo $row['p_ID']; ?>" class="btn btn-primary">Edit</a>
					
					
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

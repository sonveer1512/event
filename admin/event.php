<?php
	include 'conect.php';
	session_start();
	//session_start();
if(!isset($_SESSION['admin'])){
		header('location:panel_login.php');
	}
	$usertype = 1;
	$user_id  =  null;
	$user_data = null;
	if(isset($_GET['id']) && $_GET['id'] != null){
		$user_id = $_GET['id'];
		$usertype = 0;
		$usededit = 'select * from event where id="'.$user_id .'"';
		$rall = mysqli_query($database,$usededit);
		$user_data = mysqli_fetch_array($rall);
	}


?>

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
						<h2> Event</h2>
						<p><?php print_r ($user_id);?></p>
						<p><?php print_r ($user_data);?></p>	
						
					<div action="/action_page.php">
						<div class="form-group">
						  <label for="title"> TITLE</label>
						  <input type="title" class="form-control" id="title" placeholder="Enter title" >
						</div>
						<div class="form-group">
						  <label for="organizer">ORGANIZER</label>
						  <input type="organizer" class="form-control" id="organizer" placeholder="Enter organizer" >
						</div>
						
						<div class="form-group">
						  <label for="cost"> COST</label>
						  <input type="Event cost" class="form-control" id="cost" placeholder="Enter cost" >
						</div>
						<div class="form-group">
						  <label for="venue">VENUE</label>
						  <input type="venue" class="form-control" id="venue" placeholder="Enter venue"  >
						</div>
						<div class="form-group">
						  <label for="start"> START</label>
						  <input type="datetime-local"  id="start" placeholder="Start Date" >
						 
						</div>
						<div class="form-group">
						  <label for="end"> END</label>
						  <input type="datetime-local"  id="end" placeholder=" End Date" >
						</div>
						<div class="form-">
						  <label for="image">event Image:</label>
						  <input type="file"  id="photo" placeholder="select image ">
						</div>
						
						<?php
							if($usertype){
								?>
								<button id="sub" class="btn btn-primary">Submit</button>
								<?php
							}else{
								?>
									<button id="up" class="btn btn-danger">EDIT</button>

								<?php
							}
						?>
						
						
				   </div>
				</div>

  <?php include 'includes/foot.php'; ?>
			
	<script>
		$(document).ready(function(){
			$("#sub").click(function(){
				var title     = $("#title").val();
				var organizer = $("#organizer").val();
				var cost      = $("#cost").val();
				var venue     = $("#venue").val();
				var start     = $("#start").val();
				var end       = $("#end").val();
				var eventimage = $("#photo")[0].files[0];
				console.log(eventimage);
				console.log(title);
				console.log(organizer);
				console.log(cost);
				console.log(venue);
				console.log(start);
				console.log(end);
				
				var data = new FormData();
				data.append('f_title',title);
				data.append('f_organizer',organizer);
				data.append('f_cost',cost);
				data.append('f_venue',venue);
				data.append('f_start',start);
				data.append('f_end',end);
				data.append('eventimage',eventimage);
				
				$.ajax({
					type: "POST",
					url : "ajax/events.php",
					contentType: false,
					processData: false,
					data :data,
					success: function(response){
						console.log(response);
					}
				});
			});
			
					
					
					
					$("#up").click(function(){
			var id     ='<?php echo $user_id ?>';
			var title  = $("#title").val();
			var organizer = $("#organizer").val();
			var cost   = $("#cost").val();
			var venue = $("#venue").val();
			var start = $("#start").val();
			var end = $("#end").val();
			var eventimage = $("#photo")[0].files[0];

				console.log(id);
				console.log(title);
				console.log(organizer);
				console.log(cost);
				console.log(venue);
				console.log(start);
				console.log(end);
				console.log(eventimage);
				
			$.ajax({
				type : "POST",
				url  :"ajax/up.php",
			    data : {Id: a_id, title: a_title, organizer: a_organizer, cost:a_cost, venue:a_venue,start:a_start, end:a_end, eventimage:a_photo},
				success: function(response){
					console.log(response);
				}
			});	
		});
	});
		
		
		
		
		
		
    </script>				
  <script>
	
  </script>
  
</body>
</html>

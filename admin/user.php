<!DOCTYPE html>
<?php
	session_start();
	//session_start();
if(!isset($_SESSION['admin'])){
		header('location:panel_login.php');
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
              <a href="" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
				<div class="container-fluid">
					<h2>Add - User</h2>
					<div>
						<div class="form-group">
						  <label for="Event Name">Name</label>
						  <input type="Event Name" class="form-control" id="name" placeholder="Enter Event Name" name="email">
						</div>
						<div class="form-group">
						  <label for="location">Email</label>
						  <input type="Location" class="form-control" id="email" placeholder="Enter location" name="location">
						</div>
						
						<div class="form-group">
						  <label for="price">Mobile</label>
						  <input type="Event Price" class="form-control" id="phone" placeholder="Enter price" name="price">
						</div>
						<div class="form-group">
						  <label for="Password">Password</label>
						  <input type="password" class="form-control" id="pass12" placeholder="Enter price" name="price">
						</div>
						<div class="form-group">
						  <label for="image"> Image:</label>
						  <input type="file"  id="image" class="form-control" placeholder=" ">
						</div>
						
						<button id="submit" class="btn btn-danger">Submit</button>
				   </div>
				</div>

  <?php include 'includes/foot.php'; ?>
  
  <script>
	$("#submit").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var pass = $("#pass12").val();
		var image = $("#image")[0].files[0];
		
		console.log(pass);
		
		var data = new FormData();
		data.append('T_name',name);
		data.append('T_email',email);
		data.append('T_phone',phone);
		data.append('T_pass12',pass);
		data.append('imagefile',image);
		
		console.log(FormData);
		
		$.ajax({
			type: "post",
			url: "ajax/user-service.php",
			contentType:false,
			processData:false,
			data: data,
			success : function(resp){
				//console.log(resp);
				if(resp==1){
								swal("Good job!", "successfull user correct information!", "success");	
						 }else{
							 swal("something get worng!", "fill your correct information!", "error");
						 }
			}
		})
	});
  </script>
  
</body>
</html>

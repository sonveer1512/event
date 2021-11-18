<?php
	session_start();
	//session_start();
if(!isset($_SESSION['admin'])){
		header('location:panel_login.php');
	}
?>
<!DOCTYPE html>
<html>

<head>
  <?php include 'includes/head.php'; ?>
</head>

<body class="bg-default">
  
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src=></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Or sign in with credentials</small>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="form-group">
						<div class="control">
									
										<div class="form-group">
										  <label for="name">Name</label>
										  <input type="text" class="form-control" id="plName" placeholder="Enter Name" >
										</div>
										<div class="form-group">
										  <label for="email">Email</label>
										  <input type="text" class="form-control" id="plEmail" placeholder="Enter email" >
										</div>
										<div class="form-group">
										  <label for="password">Password</label>
										  <input type="text" class="form-control" id="plPassword" placeholder="Enter Password" >
										</div>
										<div class="form-group">
										  <label for="mobile">Mobile</label>
										  <input type="text" class="form-control" id="plobile" placeholder="Enter mobie" >
										</div>
										<div class="form-group">
										  <label for="image"> Image:</label>
										  <input type="file"  id="plimage" class="form-control" placeholder=" ">
										</div>
										
										
										
										<label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me</label>
										<div class="text-center">
                  <button type="button" id="plSignin" class="btn btn-primary my-4">Sign in</button>
                </div>
                </div>
               
              
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php include 'includes/foot.php'; ?>
  <script>
	$(document).ready(function(){
		$("#plSignin").click(function(){
			var name  =$("#plName").val();
			var email = $("#plEmail").val();
			var password =$("#plPassword").val();
			var mobile =$("#plobile").val();
			var image  =$("#plimage")[0].files[0];
			//console.log(name);
			//console.log(email);
			//console.log(password);
			//console.log(mobile);
			console.log(image);
			var data =new FormData();
						data.append('T_name',name);
						data.append('T_email',email);
						data.append('T_mobile',mobile);
						data.append('T_image',image);
						data.append('T_password',password);

			$.ajax({
				type:"POST",
				url:"ajax/user-service.php",
				contentType:false,
				processData:false,
				data:data,
				success:function(resp){
					console.log(resp);
				}
				
			})
		});
	});
  </script>
</body>
</html>
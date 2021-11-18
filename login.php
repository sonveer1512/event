<html>
	<head>
		<title>login page</title>
		<?php include 'includes/head.php';?>
	</head>
     	<body class="lobody">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-8" >
							<div class="log_1">
								<h5 class="iouy">Welcome BookMyshow</h5>
								<p class="hjgf">Welcome to Enjoy world<br>amazing movies , game, kids program and events etc. </p>
								<div class="google">
									<a class="fab fa-google-plus-g"></a>
									
									
									<a class="fab fa-facebook-f"></a>
									
									
									<a class="fab fa-instagram"></a>
									
									
									<a class="fab fa-facebook-messenger"></a>
									
									
									<a class="fab fa-twitter-square"></a>
									
								</div>
							</div>
						</div>
						<div class="col-md-4" id="inf">
							<div class="log_2">
								<h1></h1>
									<div class="control">
										<div class="form-group">
										  <label for="email">Email</label>
										  <input type="text" class="form-control" id="loemail" placeholder="Enter email" >
										</div>
										<div class="form-group">
										  <label for="password">Password</label>
										  <input type="password" class="form-control" id="lopass" placeholder="Enter Password" >
										</div>
										
										<button id="login" class="submit">Login</button>
										<label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me</label>
										<div style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Do not have account <a href="register.php">register?</a></span>
  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>	
			<?php include 'includes/foot.php';?>
			<script src="js/sweetalert.min.js"></script>
			<script>
				$(document).ready(function(){
					 $("#login").click(function(){
						var email = $("#loemail").val();
						var pass  = $("#lopass").val();
							console.log(email);
							console.log(pass);
							
							var data = new FormData();
							data.append('T_loemail',email);
							data.append('T_lopass',pass);
							//console.log(data);
							
							$.ajax({
								type:"POST",
								url:"admin/ajax/loginpage.php",
								contentType:false,
								processData:false,
								data:data,
								success:function(resp){
									//console.log(resp);
									if(resp ==1){
										window.location.href="index.php";
									}else{
										swal("Something Get Wrong!", "Please enter your correct information", "warning");
									}
								}
							});
					 });
				});
			</script>
    	</body>
</html>
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
										  <label for="name">Name</label>
										  <input type="text" class="form-control" id="rename" placeholder="Enter Name" >
										</div>
										<div class="form-group">
										  <label for="email">Email</label>
										  <input type="text" class="form-control" id="reemail" placeholder="Enter email" >
										</div>
										<div class="form-group">
										  <label for="password">Password</label>
										  <input type="password" class="form-control" id="repass" placeholder="Enter Password" >
										</div>
										<div class="form-group">
										  <label for="mobile">Mobile</label>
										  <input type="text" class="form-control" id="remobile" placeholder="Enter mobie" >
										</div>
										<div class="form-group">
										  <label for="">Image</label>
										  <input type="file" class="form-control" id="reimage" placeholder="" >
										</div>
										
										<button id="loko" class="submit">user sign</button>
										<label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me</label>
										<div style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Do not have account <a href="#">register?</a></span>
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
					 $("#loko").click(function(){
						var name = $("#rename").val();
						var email = $("#reemail").val();
						var mobile = $("#remobile").val();
						var image =$("#reimage")[0].files[0];
						var pass  = $("#repass").val();
						//var WWE ={name,email,mobile,pass};
						//console.log(WWE);
						//console.log(email);
						//console.log(mobile);
						//console.log(pass);
						var data =new FormData();
						data.append('T_name',name);
						data.append('T_email',email);
						data.append('T_mobile',mobile);
						data.append('T_image',image);
						data.append('T_pass',pass);
						
						
						
						
					
						$.ajax({
							type:"POST",
							url:"admin/ajax/user_register.php",
							contentType:false,
							processData:false,
							data:data,
							success:function(response){
								//console.log(response);
								if(response ==1){
									window.location.replace("login.php");
									//swal("Something", "Please enter your correct information", "success");
								}else{
									swal("Something Get Wrong!", "Please enter your correct information", "warning");
								}
								
							}
						})
					 });
				});
			</script>
    	</body>
</html>
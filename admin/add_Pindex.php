<?php 
	session_start();
	/*include 'conect.php';
	$pro_type = 1;
	$p_ID = null;
	$prodata = null;
	if(isset($_GET['id']) && $_GET['id'] != null ){
		$p_ID = $_GET['id'];
		$pro_type = 0;
		$edit = 'select * from promation where p_ID="'.$p_ID.'"';
		$prosql = mysqli_query($database,$edit);
		$prodata =mysqli_fetch_array($prosql);
	}
	*/
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
			
              <a href="add-promation.php" class="btn btn-sm btn-primary">ADD_PROMATION</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
				<div class="container-fluid">
						<h2>index_PROMATION_LIST</h2>
						
						
						
								
					<div action="/action_page.php">
						<div class="form-group">
						 <label for="Event Name"> Promotion Name</label>
					<input type="Event Name" class="form-control" id="Iname" placeholder="Enter Event Name" name="name" value="<?php echo $prodata['p_name'] ?>">
						</div>
						<div class="form-group">
						 <label for="Event Name"> Promotion Url</label>
					<input type="Event Name" class="form-control" id="Iurl" placeholder="Enter url" name="name" value="<?php echo $prodata['p_url']; ?>">
						</div>
						<div class="form-group">
						 <label for="Event Name"> Promotion image</label>
					<input type="file" class="form-control" id="Iimage" placeholder="Enter Event Name" name="name">
						</div>						
						
						<?php
							if($pro_type){
								?>
								<button id="Isubmit" class="btn btn-primary">Submit</button>
								<?php
							}else{
								?>
								<button id="Ichange" class="btn btn-primary">change</button>
								<?php
							}
						?>
						
						
						
							
						
						
							
						
				   </div>
				</div>

  <?php include 'includes/foot.php'; ?>
		
	<script src="js/sweetalert.min.js"></script>		
	<script>
	
	$(document).ready(function(){
		$('#Isubmit').click(function(){
			var name=$('#Iname').val();
					var url=$('#Iurl').val();
					var image=$('#Iimage')[0].files[0];
					
					console.log(name);
					console.log(url);
					console.log(image);
					
					//var data=new FormData();
					//data.append('T_name',name);
					//data.append('T_url',url);
					//data.append('T_image',image);
					//console.log(data);
						//$.ajax({
							//type:"POST",
							//url:"ajax/add_promotion.php",
							//contentType:false,
							//processData:false,
							//data:data,
							//success:function(resp){
								//console.log(resp);
								//if(resp==1){
									//swal("Good job!", "You clicked the button!", "success");
								//}else{
									//swal("Good job!", "please fill correct information!", "error");
								//}
							//}
						//});
		
			
		
		});
		   $("#change").click(function(){
			   var id="<?php echo $prodata['p_ID']?>";
				var name =$("#pname").val();
				var url =$("#purl").val();
				var image =$("#pimage")[0].files[0];
				if(image!= ''){
					var imagename="<?php echo $prodata['p_Dimage']?>";
				}
				console.log(imagename);
				console.log(id);
				console.log(name);
				console.log(url);
				//console.log(image);
				
				var data= new FormData();
				data.append('L_id',id);
			
				data.append('L_name',name);
				data.append('L_image',image);
				data.append('L_imagename',imagename);
				data.append('L_url',url);
				//data.append('L_image',image);
				
				$.ajax({
					type:"POST",
					url:"ajax/update_promotion.php",
					contentType:false,
					processData:false,
					data:data,
					success:function(resp){
						if(resp==1){
							swal("Good job!", "You clicked the button!", "success");
							}else{
							swal("Good job!", "You clicked the button!", "error");
							}
					}
				});
			});
		
		
		
	});
	
	
  </script>				
</body>
</html>

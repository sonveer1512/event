<?php
	include 'conect.php';
	session_start();
	//session_start();
if(!isset($_SESSION['admin'])){
		header('location:panel_login.php');
	}
	$cate_type = 1;
	$cate_id  = null;
	$cate_data=null;
	if(isset($_GET['id']) && $_GET['id'] != null){
		$cate_id = $_GET['id'];
		$cate_type = 0;
		//print_r($cate_id);
		$catekey = "select * from category where cate_id='".$cate_id."'";
		$cateresult = mysqli_query($database, $catekey);
		$catedata = mysqli_fetch_array($cateresult);
	}
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
						<h2>Catgoury</h2>
							
						<?php print_r($cate_data);?>
						
					<div action="/action_page.php">
					<div class="row">
					<div class="col-lg-6">
						
						<div class="form-group">
						
						  <label for=" Catgoury"> Category:</label>
						  <input type="select" class="form-control" id="Catgoury" placeholder="Enter Category" value="<?php echo $catedata['cate_name']?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
						
						  <label for=" Catgoury"> status:</label>
						  <input type="text" class="form-control" id="cstatus" placeholder="Enter status" value="<?php echo $catedata['status']?>">
						</div>
					</div>
					</div>
						<?php
							if($cate_type){
								?>
							<button class="btn btn-neutral" id="check">submit</button>	
								<?php
							}else{
								?>
									<button class="btn btn-primary" id="upsub">update</button>
								<?php
							}
						?>	
				   </div>
				</div>

  <?php include 'includes/foot.php'; ?>
  <script src="js/sweetalert.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#check").click(function(){
					 var Catgoury = $("#Catgoury").val();
					 var status = $("#cstatus").val();
					 var object={Catgoury,status};
					 //console.log(Catgoury);
					 console.log(status);
					 
					 $.ajax({
						 type:"POST",
						 url:"../admin/ajax/Catgoury.php",
						 data:object,
						 success:function(resp){
							 //console.log(resp);
							 if(resp==1){
								swal("Good job!", "successfull your correct information!", "success");	
						 }else{
							 swal("Good job!", "fill your correct information!", "error");
						 }
						 }
						 
					 });
				});
				
				 $("#upsub").click(function(){
						var cate_id = '<?php echo $cate_id ?>';
						 var cate = $("#Catgoury").val();
						 var status =$("#cstatus").val();
						 
						 
						 var obj = {
							  cate, cate_id ,status
							 
						 };
						 console.log(obj);
						 
						 
						 $.ajax({
							 type:"POST",
							 url:"ajax/Catgoury_update.php",
							 data:obj,
							 success:function(resp){
								 //console.log(resp);
								 if(resp==1){
									swal("Good job!", "Successfull Submit your data!", "success");
								}else{
									swal("Good job!", "Please fill your data!", "error");
									}
							 }
						 });
					 });
				
			});
		</script>
					
</body>
</html>

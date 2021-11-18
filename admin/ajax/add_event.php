<?php 
	include 'conect.php';
	$usertype = 1;
	$user_id = null;
	$user_data = null  ;
	if(isset($_GET['id']) && $_GET['id'] != null){
		$user_id = $_GET['id'];
		$usertype = 0;
		$usededit = 'select * from addevent where id="'.$user_id.'"';
		$res = mysqli_query($database, $usededit);
		$user_data = mysqli_fetch_array($res);
		
		//print_r($user_data['listimage']);
		
	}	

	
?>


	
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <base href="event" target="_blank">
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
						<h2>Add - Event</h2>
						
						
						
					<div action="/action_page.php">
						<div class="form-group">
						  <label for="Event Name"> Name:</label>
						  <input type="Event Name" class="form-control" id="name" placeholder="Enter Event Name" value="<?php echo $user_data['name'] ?>" name="email">
						</div>
						<div class="form-group">
						  <label for="location">Location:</label>
						  <input type="Location" class="form-control" id="location" placeholder="Enter location" value="<?php echo $user_data['location']?>" name="location">
						</div>
						
						<div class="form-group">
						  <label for="price"> Price:</label>
						  <input type="Event Price" class="form-control" id="price" placeholder="Enter price" value="<?php echo $user_data['price']?>"name="price">
						</div>
						<div class="form-group">
						  <label for="price">Descripation:</label>
						  <input type="descripation" class="form-control" id="descripation" placeholder="Enter Descripation"  value="<?php echo $user_data['description']?>" name="description">
						</div>
						<?php
							//while($row = mysqli_fetch_array($eventresult)){
								//print_r($row);
								?>
						
						<div class="form-group">
							 <label for="category">Choose a category:</label>
								  <select name="category"  class="form-group" id="clickcate">
								  <option value="">Select category</option>
									<option value="1">plying</option>
									<option value="2">education</option>
									<option value="3">singing</option>
									<option value="4">comedy</option>
									<option value="5">envorment</option>
									<option value="6">dance</option>
								  </select>

						</div>
					
						<div class="form-group">
						  <label for="date"> Start Date:</label>
						  <input type="datetime-local"  id="startdate" placeholder="Start Date" value="<?php echo $user_data['startdate']?>"name="date">
						 
						</div>
						<div class="form-group">
						  <label for="date"> end Date:</label>
						  <input type="datetime-local"  id="enddate" placeholder=" End Date" value="<?php echo $user_data['enddate'] ?>"name="date">
						</div>
						<div class="form-group">
						  <label for="image">List Image:</label>
						  <input type="file"  id="photo1" placeholder=" " class="form-group">
						</div>
						<div class="form-group">
						  <label for="image">Detail Image:</label>
						  <input type="file"  id="photo2" class="form-group" placeholder=" ">
						</div>
						
						<?php // print_r($user_data); ?>
						<div class="form-group">
						  <label for="about">About :</label>
						  <textarea  name="about" class="form-control" id="abc" placeholder="about "  ><?php echo $user_data['about'] ?></textarea>
						</div>
						<div class="form-group">
						  <label for="termCondition">Term Condition:</label>
						  <textarea  name="termCondition" class="form-control" id="log10" placeholder="termCondition "  ><?php echo $user_data['termCondition']?></textarea>
						</div>
						
						
						
						<?php
						if($usertype){
							?>
							<button id="submit" class="btn btn-primary">Submit</button>
							<?php
						} else {
							?>
							<button id="update" class="btn btn-danger">update</button>
							<?php
						}
						?>
						
						
						
				   </div>
				</div>

  <?php include 'includes/foot.php'; ?>
		<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>	
	<script>
	CKEDITOR.replace( 'log10');
	CKEDITOR.replace( 'abc');
	$(document).ready(function(){
		$("#submit").click(function(){
			//var category   = $("category").val();
			var name       = $("#name").val();
			var location   = $("#location").val();
			var price      = $("#price").val();
			var descripation = $("#descripation").val();
			var startdate  = $("#startdate").val();
			var enddate    = $("#enddate").val();
			var listimage  = $("#photo1")[0].files[0];
			var detailimage = $("#photo2")[0].files[0];
			var about       = CKEDITOR.instances["about"].getData();
			var termCondition = CKEDITOR.instances["termCondition"].getData();
			
			console.log(category);
			//console.log(termCondition);
			//console.log("about" + about);
			
			var data = new FormData();
			//data.append('T_category',category);
			data.append( 'listfile', listimage);
			data.append( 'detailfile', detailimage);
			data.append( 'T_name', name);
			data.append( 'T_location', location);
			data.append( 'T_price', price);
			data.append( 'T_descripation', descripation);
			data.append( 'T_startdate', startdate);
			data.append( 'T_enddate', enddate);
			data.append( 'T_termCondition',termCondition);
			data.append( 'T_about',about);
			
			//console.log("formdata" + data);
			
			
			$.ajax({
				type: "post",
				url: "ajax/add.php",
				cache:false,
				contentType: false,
				processData: false,
				data: data,
				success : function(resp){
					console.log(resp);
				}
			});
		});
		
		
		$("#update").click(function(){
			//console.log("asdfsd");
			var id = '<?php echo $user_id ?>';
			var name     = $("#name").val();
			var location = $("#location").val();
			var price    = $("#price").val();
			var descripation = $("#descripation").val();
			var startdate =  $("#startdate").val();
			var enddate    = $("#enddate").val();
			var listimage      =$("#photo1")[0].files[0];
			var detailimage = $("#photo2")[0].files[0];
			var about       = CKEDITOR.instances["about"].getData();
			var termCondition =CKEDITOR.instances["termCondition"].getData();
			var dimage = "<?php echo $user_data['detialimage']; ?>";
			
			var data = new FormData();
			data.append('id',id);
			data.append('name',name);
			data.append('location',location);
			data.append('price',price);
			data.append('descripation',descripation);
			data.append('startdate',startdate);
			data.append('enddate',enddate);
			data.append('listfile',listimage);
			data.append('detailfile',detailimage);
			data.append('about',about);
			data.append('termCondition',termCondition);
			data.append('dimgname',dimage);
			
			//console.log("formData",+ data);
			
			/*console.log("id" + id);
			console.log("name" + name);
			console.log("location" + location);
			console.log("price" + price);
			console.log("descripation" + descripation);
			console.log("startdate" + startdate);
			console.log("enddate" + enddate);
			console.log("listfile" + listimage);
			console.log("detailfile" + detailimage);
			console.log("about" + about);
			console.log("termCondition" + termCondition);*/
			
			
			$.ajax({
				type: "post",
				url:   "ajax/update.php",
				cache:false,
				contentType: false,
				processData: false,
				data : data,
				success: function(resp){
					//console.log(resp);				
				}
			})
		});
		  $("#category").change(function(){
			var category = $(this).val();
			
			var cate_name = $("category").val();
			
			console.log(cate_name);
		})
		
		
		
	});
	
	
  </script>				
</body>
</html>

<?php
	session_start();
	include 'admin/conect.php';

	$countnav = 'select * from category ';
	$resultcount = mysqli_query($database , $countnav);
	
	//print_r($navcount);


	if(isset($_GET['cat'])){
	$pp=$_GET['cat'];
	//print_r($pp);
		 $qw="Select * from addevent where cate_id='".$pp."'";
	
	}else{
		
			$qw = 'select * from addevent';
	
	}
    $eventresult = mysqli_query($database,$qw);
	$countnav1 = 'select * from promation ';
	$resultcount1 = mysqli_query($database , $countnav1);
	//print_r($resultcount1);
?>





<html>
	<head>
		<title>bookmyshow</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include 'includes/head.php'; ?>		
	</head>
	<body style="background:#eee;">
		<?php include 'includes/nav.php'; ?>
			
			<section class="a_3">
				<div class="">
				    <div class="">
						<h1></h1>
					
						<div id="myslideshow" class="owl-carousel owl-theme">
						<?php while($sd=mysqli_fetch_array($resultcount1)){
								?>
								<div class="item">
								<a href="<?php echo $sd['p_url']?>"><img src=" <?php echo 'admin/images/admin_image/'.$sd['p_Dimage']?>" ></a>
							</div>	
								<?php
							}?>
							
							
							
						</div>
						
				    </div>
			</section>
			<section class="ab1">
				<div class="container">
					<div class="row">
					
						<div class="col-md-3">
							<h1 class="qwer">Filters</h1>
						<?php //print_r($resultcount)?>
							<div id="ab1090">
								<div class="card">
									<div class="card-header">
									  <a class="card-link" data-toggle="collapse" href="#collapseOne">
										<h6 class="ab6">Date     <i class="fas fa-chevron-circle-down"></i> </h6>
									  </a>
									</div>
									<div id="collapseOne" class="collapse " >
									  <div class="card-body">
											<button class="ab3">Today</button>    <button class="ab3">Tomorrow</button>
								
								<button class="ab3">This Weekend</button>
									  </div>
									</div>
                                </div>
								
							</div>
							<div id="ab7">
								
								<div class="card">
									<div class="card-header">
									  <a class="card-link" data-toggle="collapse" href="#collapse2">
										<h6 class="ab6">   Categories  <i class="fas fa-chevron-circle-down"></i> </h6>
									  </a>
									</div>
									<div id="collapse2" class="collapse " >
									  <div class="card-body">
											<button class="ab91">Work Shops</button>    <button class="ab91">Comedy Shows</button>
								
								<button class="ab91">kids</button>
								<button class="ab91">Online Streaming Events</button>    <button class="ab91">Preformance</button>
								
								<button class="ab91">Screning</button>
								<button class="ab91">Vaccination</button>    <button class="ab91">Online Streaming Events</button>
								
								<button class="ab91">Music Shows</button>
								<button class="ab91">Spiritulity</button>
								<button class="ab91">Celebrity Wishes</button>    <button class="ab91">Meetups</button>
								
								<button class="ab91">Talks</button>
								<button class="ab91">Covishield</button>
								<button class="ab91">Conference</button>    <button class="ab91">Exhibitions</button>
								
									  </div>
									</div>
                                </div>
									

							</div>
							<div id="ab7">
								
								
								<div class="card">
									<div class="card-header">
									  <a class="card-link" data-toggle="collapse" href="#collapse3">
										<h6 class="ab6">Price     <i class="fas fa-chevron-circle-down"></i> </h6>
									  </a>
									</div>
									<div id="collapse3" class="collapse " >
									  <div class="card-body">
											<button class="ab91">Free</button>    <button class="ab91">0 - 500</button>
								
											<button class="ab91">501 - 2000</button>
											<button class="ab91">Above 2000</button>
									  </div>
									</div>
                                </div>
								
								
							</div>
							<div id="ab7">
								
								<div class="card">
									<div class="card-header">
									  <a class="card-link" data-toggle="collapse" href="#collapsefour">
										<h6 class="ab6">More  Filters   <i class="fas fa-chevron-circle-down"></i> </h6>
									  </a>
									</div>
									<div id="collapsefour" class="collapse " >
									  <div class="card-body">
										<button class="ab91">Online Streaming</button>    <button class="ab91">Outdoor Events</button>
								
											<button class="ab91">Kids Allowed</button>
											<button class="ab91">Amateur</button>
											<button class="ab91">Kids Activities</button>
											
		
									  </div>
									</div>
                                </div>
							</div>
						</div>
						<div class="col-md-9">
							<h1 class="qwer">Events In National Capital Region (NCR)</h1>
							<div class="ab7">
					<?php 
					$count = null;
					
				while($navcount = mysqli_fetch_array($resultcount)){
						if($count >=0){
							?>
								<a type="button" class="btn ab95" href="list.php?cat=<?php echo $navcount['cate_id']?>"<><?php echo $navcount['cate_name'];?></a>
							<?php
						}$count++;
							
						}?>
									
								
								
								
							</div>
							<div class="row">
						<?php
							while($row = mysqli_fetch_array($eventresult)){
								//print_r($row);
								?>
								<div class="col-md-3">
									<a href="page.php?id=<?php echo $row['id']; ?>"><div class="item-box">
										<img src="admin/images/listing/<?php echo $row['listimage']; ?>">
										<h6 class="cv1"><?php echo $row['name']; ?></h6>
										<p class="cv2"><?php echo $row['description']; ?></p>
										<p class="cv3">₹  <?php echo $row['price']?></p>
										<p class="cv2"><?php echo $row['location']; ?></p>
									</div></a>
								</div>
								<?php
							}
					    ?>
								
							</div>
						</div>
			</section>
			

			
			
			
			

		
		<?php include 'includes/footer.php'; ?>
		<?php include 'includes/foot.php'; ?>
		<script>
			$(document).ready(function(){
				$('#change2').keyup(function(){
				
					var search =$(this).val();
					
					
				//console.log(search);
					var srch ={'T_search':search};
					$("#enter").html("");
					//console.log(srch);
					
					$.ajax({
						type:"POST",
						url:"admin/ajax/search.php",
						data:srch,
						success:function(resp){
							//console.log(resp);
							 var data = $.parseJSON(resp);
							for (var i = 0; i<data.length; i++){
								$("#enter").append("<li><a href=page.php?id="+data[i].id+">"+data[i].name+"</a></li>");
								console.log(data);
							}
							
						}
					});
				});
			});
		</script>
	</body>
</html>

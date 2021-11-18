<?php
	include 'admin/conect.php';
	session_start();
	
	
	$user_id=null;
	if(isset($_SESSION['login']) && $_SESSION['login'] !=null){
		$user_id =$_SESSION['login'];
	}
	//print_r($user_id);
	$eventid = $_GET['id'];
	$sqlpage = 'select * from addevent where id="'.$eventid.'"';
	$pageresult = mysqli_query($database,$sqlpage);
	$eventData = mysqli_fetch_array($pageresult);
	
	
?>

<html>
	<head>
		<title>bookmyshow</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include 'includes/head.php'; ?>		
	</head>
	<body style="background-color:#eee;">
		<?php include 'includes/nav.php'; ?>
			
			
			            
								<section class="sect-1">
				<div class="container">
					<div class="row">
						<div class="aa1">
							<div class="banner-image">
								<img src="admin/images/detail/<?php echo $eventData['detialimage']; ?>"  />
							</div>
							<div id="banner-image"  style="background-image:url(admin/images/detail/<?php echo $eventData['detialimage']; ?>)"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect-2">
				<div class="container" id="hjki">
					<div class="row">
						<div class="col-md-6">
							<div class="box1">
								<h1 class="rg1"><?php echo $eventData['name']; ?></h1>
								<p class="rg2"><?php echo $eventData['description']; ?></p>
									
							</div>	
						</div>
						<div class="col-md-6">
								<div class="box2" >
									<button class="rg3" data-toggle="modal" data-target="#exampleModal">Book</button>
								</div>
						</div>

								
						
										
						</div>
						<!--modal-->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
		<?php if($user_id == null){
			?>
				please login first
				<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" id="add" class="btn btn-danger" style="width:100%;" href="login.php">login</a>
      </div>
			
			<?php
		} else {
			?>
				<div class="row" >
			<div class="col-lg-12">
				<div class="asd">
					<div class="asd1"><h4 class="rg1">Covishield Vaccination</h4></div>
					<div class="asd2"><h5>₹ <?php echo $eventData['price']; ?></h5></div>
				</div>
			</div>
		</div>
		<div class="row"style="border:1px solid #eee; margin:8px;">
			<div class="col-lg-12" >
				<div class="asd3">
					<div class="data-">
						<p class="bhi">Sat,12 Oct,2021 <br>08:00PM</p>
					</div>
					<div class="date12">
						<p class="bhi">Venue<br>Hotal Novotel:Delhi</p>
					</div>
					<hr>
					<div class="date13" >
						<p class="bhi">Regular(<?php echo $eventData['price']; ?>) : 1 ticket(s)</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin:8px;">
			<div class="col-lg-12">
				<div class="date15">
					<p class="bhi">Entry Pass<select name="Ticket" id="hide">
						<option value="">select ticket</option>
						<option value="1">1 ticket</option>
						<option value="2">2 ticket</option>
						<option value="3">3 ticket</option>
						<option value="4">4 ticket</option>
						<option value="5">5 ticket</option>
					</select></p>
				</div>
			</div>
		</div>
		<hr>
		<div class="row" style="border:1px solid #eee; margin:8px;">
			<div class="col-lg-12">
				<div class="asd">
					<p class="asd1" id="opi">Sub-total  = </p>
					<p class="asd2" id="cprice">₹ 122</p>
				</div>
				<div class="asd">
					<p class="asd1" id="opi">GST 18%  = </p>
					<p class="asd2" id="gstrate">₹ 21.96</p>
				</div>
				
				<div class="asd">
					<p class="asd1" id="opi">Total Amount  = </p>
					<p class="asd2" id="grandtotal">₹ 194.6</p>
				</div>
				<button type="button" id="add" class="btn btn-danger" style="width:100%;" >add</button>
			</div>
		</div>
			<?php
		} ?>
		
		
        
		
		
      </div>
      
    </div>
  </div>
</div>
					
						<!--modal-->
						<hr>
					<div class="row">
							<div class="col-md-4">
								<div class="box3">
									<p class="rg4">
									<?php 
										$date = new Datetime($eventData['startdate']);
										$edate = new Datetime($eventData['enddate']);
										echo $date->format('d-M-Y'); ?> <span style="padding:0 5;">to</span> <?php 
										echo $edate->format('d-M-Y');?>
								</p>
									
								</div>
							</div>
							<div class="col-md-8">
								<div class="box4">
									<p class="rg4"> <a class="fas fa-map-marker-alt" id="icon"></a><?php echo $eventData['location']?><span class="pr890">₹ <?php echo $eventData['price']; ?></span></p>
								</div>
							</div>
						
					</div>
				</div>
			</section>	
							
			
			<section class="sect-3">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="box5">
								<h5 class="box6">Shear this event</h5>
									<li class="fab fa-facebook-f" id="icon1"></li> <li class="fab fa-twitter" id="icon2" ></li>
							</div>
						</div>
				<div class="col-md-6" id="rg6">
							<div class="box6">
								<h5 class="">Click on Interested to say update about this event.</h5>
								<a class="fas fa-thumbs-up" id="icon90">   22</a>   
								<button class="rg8">Interested ?</button>
								<p class="rg9">Pepole have show interested<br>recently</p>
							</div>
							<div class="box8">
													<h5 class="rg11">About</h5>
												<p class="rg12"<?php echo $eventData['about']; ?>></p>
												<button class="rg13">Read More</button>
												
								<div class="card">
									<div class="card-header">
									  <a class="card-link" data-toggle="collapse" href="#collapseOne">
										<h6 class="rg14">Terms & Condition     <i class="fas fa-chevron-circle-down"></i> </h6>
									  </a>
									</div>
									<div id="collapseOne" class="collapse show" >
									  <div class="card-body">
											<div class="term">
													<?php print_r($eventData['termCondition']); ?>
												</div>
									  </div>
									</div>
                                </div>
												
													<h5 class="rg20">You may also like</h5>
												<div class="">
													<div id="pass95" class="owl-carousel owl-theme">
											<div class="item">
												<img src="image/ab1.jpg" class="">
												<h2 class="aaa">The Suicide Squad</h2>
												
											</div>
											<div class="item">
												<img src="image/ab2.jpg" class="">
												<h4 class="aaa">Demon Slayer: Mugen Train</h4>
												
											</div>
											<div class="item">
												<img src="image/ab3.jpg" class="">
												<h4 class="aaa">Prommising Young Women</h4>
												
											</div>
											<div class="item">
												<img src="image/ab4.jpg" class="">
												<h2 class="aaa">Hitman's Wife's Bodyguard</h2>
												
											</div>
											<div class="item">
												<img src="image/ab5.jpg" class="">
												<h2 class="aaa">Bell Bottom</h2>
												
											</div>
											<div class="item">
												<img src="image/ab6.jpg" class="">
												<h2 class="aaa">Godzilla vs. Kong</h2>
												
											</div>
											<div class="item">
												<img src="image/ab7.jpg" class="">
												<h2 class="aaa">The Conjuring: The Devil Made Me Do It</h2>
												
											</div>
											<div class="item">
												<img src="image/ab8.jpg" class="">
												<h2 class="aaa">Puaada</h2>
												
											</div>
											<div class="item">
												<img src="image/ab9.jpg" class="">
												<h2 class="aaa">Hitman's Wife's Bodyguard</h2>
												
											</div>
											<div class="item">
												<img src="image/ab10.jpg" class="">
												<h2 class="aaa">Hitman's Wife's Bodyguard</h2>
												
							                </div>
							</div>				
			</div>		
						
					</div>
					
				</div>
					<div class="col-md-4">
						<div class="box60">
							<div class="box61">
								<div class="box62">
									<p class="box63">Contactless Ticket & <br> Fast-track with  M-<br>ticket . <span class="ticket"> Learn How ></span>
								</div>
								<div class="box90">
								<h5 class="box100">National Capital Region (NCR)</h5>
								<h6 class="box101"> Backyard Sports Club: Gurugram</h6>
								<p class="box102">sectoe-59 , kadarpur, Gurugram (HR)<br> NCR.200145 INDIA </p>
									<div class="box103">
									<img src="image/map1.png" style="width:94%; margin-bottom: 13px;">
									
									</div>
							</div>
							</div>
						</div>
							
					</div>

				</div>
			</section>
			

			<?php include 'includes/footer.php'; ?>
		<?php include 'includes/foot.php'; ?>
		<script src="js/sweetalert.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#hide").change(function(){
					var ticket = $(this).val();
					
					var price = "<?php echo $eventData['price'];?>";
					 var event_price= price*ticket;
					 var event_gst=event_price*0.18;
					 var total =event_price+event_gst;
					 
					 var sub_total=$("#cprice").html(event_price);
					 var gst  =$("#gstrate").html(event_gst);
					 var booking=$("#book").html();
					 var amount=$("#grandtotal").html(total);
					//console.log(ticket);
					//console.log(price);
					//console.log(event_price);
					//console.log(event_gst);
					//console.log(total);
					//console.log(book);
				});
				$("#add").click(function(){
					var sub_total = $("#cprice").html();
					var gst       = $("#gstrate").html();
					var amount   = $("#grandtotal").html();
					var ticket   =$("#hide").val();
					var price = "<?php echo $eventData['price'];?>";
					var	eventid ="<?php echo $eventData['id']?>";
					var user_id="<?php echo $user_id?>";
					//console.log(eventid);
					console.log(user_id);
					var obj = {sub_total,gst,amount,ticket,price,user_id,eventid};
					
					console.log(obj);
					
					
					//console.log(ticket);
					//console.log(gst);
					//console.log(amount);
					//console.log(sub_total);
					
					
					$.ajax({
						type:"POST",
						url:"admin/ajax/booking.php",
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
					
					
					
				})
			})
			
				
		</script>
		
			
	</body>
</html>

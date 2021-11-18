<?php
    //session_start();
	include 'admin/conect.php';
	$sql = 'select * from category ';
	
	$dogresult = mysqli_query($database, $sql);
	
	if(isset($_SESSION['login'])){
$qw=$_SESSION['login'];
//print_r($qw);
	$lo=$_SESSION['login'];
	$sql4='select * from user_table where user_id="'.$qw.'"';
	$result4 =mysqli_query($database,$sql4);
	//print_r($result4);
//$sq=mysqli_fetch_array($result4);
	//print_r($sq);
}
	

?>
<section class="asdf">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<img src="image/book.png" alt="logo" style="width:135px;">
			</div>
			<div class="col-md-6">
				<nav class="navbar navbar-expand-sm navbar-danger">
					<div class="form-inline" action="/action_page.php">
						 <input class="form-control mr-sm-2" data-toggle="collapse" data-target="#demo" id="change2" type="text" placeholder="Search for movies,events,etc">
						 <div class="demo1">
							<div id="demo" class="collapse demo2" style="background-color:#fff;">
								<ul id="enter">
									
								</ul>
								</div>
														 </div>
	     			</div>
					
				</nav>
			</div>
			<div class="col-md-4">
				<div style="display:flex" >
					<div id="abc" style="padding:12px; padding-left:185px; color:#fff;">
						
						<div class="container">
							
						  
						  
						</div>  
					</div>
					<div style="padding:8px;">
					<?php 
						if(isset($_SESSION['login']) && !$_SESSION==''){
							?>
						<?php while($sq=mysqli_fetch_array($result4)){
							
							?>

							
							<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo"><img src="image/ban1.jpg" style="width:40px; border-radius:80px;"><?php echo $sq['name']?></button>
						  <div class="log">
							<div id="demo" class="collapse log1">
							<p class="lp1" >welcome</p>
							<div class="lp2"><i class="fas fa-envelope"></i><?php echo $sq['email']?> 
							
							</div>
							<div class="lp2"><i class="fas fa-phone-volume"></i><?php echo $sq['mobile']?>
							
							</div>
							<?php
							}
							?>
							<div class="order">
							<a href="logout.php" type="button" class="btn btn-danger" >Logout</a>
								<a href="order.php" type="button" class="btn btn-danger lpp" >order</a>
							
							</div>
							</div>
						  </div>
							
							<?php
						}else{
							
							?>
							<a href="login.php" type="button" class="btn btn-danger">Login</a>
							s
							
							<?php
						}
					?>
						
						
					</div>  <i class="fas fa-align-justify"></i>
					<div>
    				</div>
			</div>
		</div>
	</div>
</section>
<section class="main-nav">
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-md">
			  <!-- Toggler/collapsibe Button -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <!-- Navbar links -->
			  <div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
				<?php 
					$count = null;
	
					while($catarresult =mysqli_fetch_array($dogresult)){
					if($count <=2){
					?>
						
					<li class="nav-item">
					<a class="nav-link" href="Index.php?cat=<?php echo  $catarresult['cate_id']?>"><?php echo $catarresult['cate_name']?></a>
				  </li>
					<?php
				}
				$count++;
				}
				
				?>
				
				  <li class="nav-item">
					<a class="nav-link" href="list.php">Event</a>
				  </li>
				    
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">listYourShow</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Corporates</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Offers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Gifts Card</a>
					</li>
				</ul>
			  </div>
			</nav>
		</div>
	</div>
</section>


<?php
	session_start();
?>

<html>
	<head>
		<title>bookmyshow</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include 'includes/head.php'; ?>		
	</head>
	<body>
		<?php include 'includes/nav.php'; ?>
			<section class="a_3">
				<div class="container">
					<div class="row">
						<h1> Event</h1>
					<div id="myslideshow" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="image/event.jpg" class="d-block w-100">
							</div>
							<div class="carousel-item">
								<img src="image/img-2.jpg" class="d-block w-100">
							</div>
							<div class="carousel-item">
								<img src="image/img-3.jpg" class="d-block w-100">
							</div>
							<div class="carousel-item">
								<img src="image/img-4.jpg" class="d-block w-100">
							</div>
							<div class="carousel-item">
								<img src="image/img-5.jpg" class="d-block w-100">
							</div>
						</div>
					</div>	
				</div>
			</section>
		
		
		<?php include 'includes/footer.php'; ?>
		<?php include 'includes/foot.php'; ?>
	</body>
</html>

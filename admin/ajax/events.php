<?php
	include '../conect.php';
	
	$filename =$_FILES['eventimage'];
	$random   =rand(10,100);
	$genfilename ='photo'.$random.'.jpg';
	$issave =move_uploaded_file($filename['tmp_name'],'../images/img/'.$genfilename);
	
	
	$title     = $_POST['f_title'];
	$organizer = $_POST['f_organizer'];
	$cost      = $_POST['f_cost'];
	$venue     = $_POST['f_venue'];
	$start     = $_POST['f_start'];
	$end       = $_POST['f_end'];
	$status =1;
	$create_date = date('yy-m-d');
	
	$sql = "insert into event ( id, title, organizer, cost, venue, start, end, status,create_date,eventimage) values('','".$title."', '".$organizer."', '".$cost."', '".$venue."', '".$start."', '".$end."', '".$status."', '".$create_date."','".$genfilename."')";
	
	$result = mysqli_query($database, $sql);
	//print_r($result);	
	
	
?>
<?php
	
	include '../conect.php';
	
	$filename =$_FILES['listfile'];
	$random   =rand(10,100);
	$genfilename ='photo1'.$random.'.jpg';
	$isSave = move_uploaded_file($filename['tmp_name'],'../images/listing/'.$genfilename);
	
	$file = $_FILES['detailfile'];
	$issavdetail = move_uploaded_file($file['tmp_name'],'../images/detail/'.$genfilename);
	
	$name     = $_POST['T_name'];
	$location = $_POST['T_location'];
	$price    = $_POST['T_price'];
	$descripation = $_POST['T_descripation'];
	$startdate    = $_POST['T_startdate'];
	$enddate      = $_POST['T_enddate'];
	$status		=  1;
	$createddate= date('yy-m-d');
	$termCondition = $_POST['T_termCondition'];
	$about         =$_POST['T_about'];
	$cate_id       =$_POST['T_category'];
	
	//print_r($price);
	
	$sql = "insert into addevent (id, cate_id,name, location, price,  description,  startdate, enddate, status, createddate, listimage, detialimage ,termCondition,about) values ('','".$cate_id."', '".$name."', '".$location."', '".$price."', '".$descripation."', '".$startdate."', '".$enddate."', '".$status."', '".$createddate."','".$genfilename."','".$genfilename."','".$termCondition."' ,'".$about."')";
	
	$result = mysqli_query($database, $sql);
	
	//print_r($result);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>
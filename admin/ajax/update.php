<?php
	
	include '../conect.php';
	
	
	$dimgname =$_POST['dimgname'];
	
	if(isset($_FILES['listfile'])){
		$filename =$_FILES['listfile'];
		$isSave = move_uploaded_file($filename['tmp_name'],'../images/listing/'.$dimgname);
	}
	
	if(isset($_FILES['detailfile'])){
		$file = $_FILES['detailfile'];
		$issavdetail = move_uploaded_file($file['tmp_name'],'../images/detail/'.$dimgname);
	}
	
	
	
	$id = $_POST['id'];
	$name     = $_POST['name'];
	$location = $_POST['location'];
	$price    = $_POST['price'];
	$descripation = $_POST['descripation'];
	$startdate    = $_POST['startdate'];
	$enddate      = $_POST['enddate'];
	$status		=  1;
	$createddate= date('yy-m-d');
	$about     = $_POST['about'];
	$termCondition =$_POST['termCondition'];
	

	$sql = "update addevent set name='".$name."', location='".$location."',
	price='".$price."', description='".$descripation."', startdate='".$startdate."', enddate='".$enddate."',listimage='".$dimgname."',detialimage='".$dimgname."',termCondition='".$termCondition."',about='".$about."' where id = '".$id."' ";


	$resql = mysqli_query($database, $sql);
	
	print_r($resql);

?>
<?php
	include '../conect.php';
	
	$Catgoury =$_POST['Catgoury'];
	$status =$_POST['status'];
	$createddate =date('yy-m-d');
	
	//print_r($Catgoury);
	
	$csql = "insert into category(cate_id,cate_name,status,createddate)values('','".$Catgoury."','".$status."','".$createddate."')";
	
	//print_r($csql);
	
	$cresult = mysqli_query($database, $csql);
	
	//print_r($cresult);
	if($cresult){
		echo 1;
	}else{
		echo 0;
	}
?>
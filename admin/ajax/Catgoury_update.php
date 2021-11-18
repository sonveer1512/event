<?php
	include '../conect.php';
	
	
	$id  =$_POST['cate_id'];
	$cate =$_POST['cate'];
	$status =$_POST['status'];
	$createddate =date('y-m-d');
	
	//print_r($id);
	//print_r($cate);
	//print_r($status);
	//print_r($createddate);
	
	$upsql = " update  category set cate_id='".$id."',cate_name='".$cate."', status='".$status."' ,createddate='".$createddate."' where cate_id = '".$id."' ";
	
	//print_r($upsql);
	
	$upresult = mysqli_query($database,$upsql);
	if($upresult){
		echo 1;
	}else{
		echo 0;
	}
	
?>
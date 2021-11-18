<?php
	include '../conect.php';
	
	$name = $_POST['N_name'];
	$email = $_POST['N_email'];
	$pass = $_POST['N_pass'];
	$mobile = $_POST['N_mobile'];
	$status =1;
	$createdDate =date('yy-m-d');
	
	print_r($name);
	print_r($email);
	print_r($pass);
	print_r($mobile);
	
	$sql = "insert into user(cid,name,email,pass,mobile,status,createdDate)values('','".$name."','".$email."','".$pass."','".$mobile."','".$status."','".$createdDate."')";
	
	$result = mysqli_query($database,$sql);
	if($result){
	echo 1;
	}else{
	echo 0;
	}
	
	//print_r($Cresult);
?>
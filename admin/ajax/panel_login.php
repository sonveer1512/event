<?php

	session_start();
	include '../conect.php';
	
	$email = $_POST['T_loemail'];
	$pass  = $_POST['T_lopass'];
	
	//print_r($email);
	//print_r($pass);
	
	$searchsql = "select * from user where email='".$email."' && pass='".$pass."'";
	$searchsql = "select * from user where email='".$email."' && pass='".$pass."'";
	$result = mysqli_query($database,$searchsql);
	//print_r($result->num_rows);
		if($result){
			$userdata = mysqli_fetch_array($result);
			$_SESSION['admin'] = $userdata['cid'];
			echo 1;
		}else{
			echo 0;
		}
	
?>
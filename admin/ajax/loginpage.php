<?php

	session_start();
	include '../conect.php';
	
	$email = $_POST['T_loemail'];
	$pass  = $_POST['T_lopass'];
	
	//print_r($email);
	//print_r($pass);
	
	$searchsql = "select * from user_table where email='".$email."' && pass='".$pass."'";
	$result = mysqli_query($database,$searchsql);
	//print_r($result->num_rows);
		if($result->num_rows != 0){
			$userdata = mysqli_fetch_array($result);
			$_SESSION['login'] = $userdata['user_id'];
			echo 1;
		}else{
			echo 0;
		}
	
?>
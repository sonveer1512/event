<?php
	include '../conect.php';
	$id =$_GET['delete'];
	//print_r($id);
	$orsql = "delete from booking where bookingid='".$id."'";
	$result = mysqli_query($database,$orsql);
	if($result){
		header('location:/event/order.php');
	}else{
		echo "no";
	}
?>
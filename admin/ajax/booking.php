<?php
	include '../conect.php';
	
	$subtotal =$_POST['sub_total'];
	$gst      =$_POST['gst'];
	$amount   =$_POST['amount'];
	$ticket   =$_POST['ticket'];
	$price    =$_POST['price'];
	$status   =1;
	$createddate =date('yy-m-d');
	$eventid=$_POST['eventid'];
	$user_id =$_POST['user_id'];
	
	//print_r($eventid);
	//print_r($user_id);
	//print_r($createddate);
	//print_r($status);
	//print_r($price);
	//print_r($ticket);
	//print_r($subtotal);
	//print_r($gst);
	//print_r($amount);
	
	$boolsql = "insert into booking(bookingid,eventid,userid,quntity,price,gst, status,createddate,total)values('','".$eventid."','".$user_id."','".$ticket."','".$price."','".$gst."', '".$status."','".$createddate."','".$amount."')";
	
	$bookresult = mysqli_query($database,$boolsql);
	//print_r($sql);
	
	if($bookresult){
		echo 1;
	}else {
	echo 0;
	}
	
?>
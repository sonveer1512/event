
<?php
	
	include '../conect.php';
	
	$name = $_POST['T_name'];
	$email = $_POST['T_email'];
	$mobile = $_POST['T_mobile'];
	$pass =  $_POST['T_pass'];
	$image = $_FILES['T_image'];
	$im=rand(10,1000);
	$imagename='pic'.$im.'jpg';
	$mon=move_uploaded_file($image['tmp_name'],'../images/user/'.$imagename);
	//print_r($name);
	$status = 1;
	$create_date =date('yy-m-d');
	
	//print_r($name);
	//print_r($email);
	//print_r($mobile);
	//print_r($pass);
	//print_r($image);
	//print_r($imagename);
	
	
	
	$aql = 'insert into user_table (user_id ,name,email,pass,mobile,	image,	status,	create_date )values ("","'.$name.'","'.$email.'","'.$pass.'","'.$mobile.'","'.$imagename.'","'.$status.'","'.$create_date.'") ';
	$result=mysqli_query($database, $aql);
	
	print_r($result);
	//if($result){
		//echo 1;
	//}else{
		//echo 0;
		


?>
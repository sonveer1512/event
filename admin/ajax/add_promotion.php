<?php
	include '../conect.php';
	
	$name  = $_POST['T_name'];
	$image=$_FILES['T_image'];
	$rand=rand(10,300);
	$imagename='pic'.$rand.'.jpg';
	$imagemove=move_uploaded_file($image['tmp_name'],'../images/admin_image/'.$imagename);
	
	$url  = $_POST['T_url'];
	$status = 1;
	$create_date =date('yy-m-d');
	//print_r($imagename);
	//print_r($image);
	
	
	//print_r($name);
	//print_r($url);
	
	$sql="insert into promation(p_ID,p_name,p_url,p_Dimage,status,create_date)values('','".$name."','".$url."', '".$imagename."', '".$status."','".$create_date."')";
	$result = mysqli_query($database,$sql);
	
	//print_r($result);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>
<?php
	include '../conect.php';
	$id = $_POST['L_id'];
	$name = $_POST['L_name'];
	$imagename = $_POST['L_imagename'];
	if(isset($_FILES['L_image'])){
		$image=$_FILES['L_image'];
		$move=move_uploaded_file($image['tmp_name'],'../images/admin_image'.$imagename);
	}
	$url   =$_POST['L_url'];
	$status = 1;
	$create_date=date('yy-m-d'); 
	//print_r($name);
	//print_r($url);
	$sql="update promation SET p_name='".$name."', p_url='".$url."',p_Dimage='".$imagename."' ,create_date='".$create_date."' where p_ID='".$id."'";
	
	$result = mysqli_query($database,$sql);
	
	if($result){
		echo 1;
	}else{
		echo 0;
	} 
		
	
	
?>
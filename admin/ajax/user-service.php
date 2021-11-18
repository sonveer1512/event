
<?php
	
	include '../conect.php';
	
	
	$filename =$_FILES['T_image'];
	$random =rand(10,1000);
	$lllofilename ='image'.$random.'.jpg';
	$isSave = move_uploaded_file($filename['tmp_name'],'../images/adminimage/'.$lllofilename);
	
	
	$name = $_POST['T_name'];
	$email = $_POST['T_email'];
	$mobile = $_POST['T_mobile'];
	$pass =  $_POST['T_password'];
	$status = 1;
	$createdDate =date('yy-m-d');
	
	print_r($name);
	print_r($email);
	print_r($mobile);
	print_r($pass);
	print_r($filename);
	//print_r($createdDate);
	print_r($lllofilename);
	
	$usersql = "insert into user (cid, name, email,pass, mobile, status, createdDate,image) values ('', '".$name."', '".$email."','".$pass."', '".$mobile."', '".$status."', '".$createdDate."','".$lllofilename."')";
	$userresult = mysqli_query($database, $usersql);
	
	//print_r($usersql);
	if($userresult){
		echo 1;
	}else{
		echo 0;
		
	}

?>
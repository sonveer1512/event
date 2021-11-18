<?php 
include '../conect.php';
	$id=$_GET['delete'];
	//print_r($id);
	$sql="delete from addevent Where id='".$id."'";
	$result=mysqli_query($database,$sql);
	if($result){
		//echo "sucessfully";
		header("Location:../list.php");
	}else{
		echo 'not';
	}
?>
<?php
	include '../conect.php';
	$id  = $_GET['delete'];
	$sqlcate = "delete from category where cate_id='".$id."'";
	$result = mysqli_query($database,$sqlcate);
	if($result){
		echo "DELETE sucessfull";
		header("Location:../cate_list.php");
	}else{
		echo  "no delete";
	}
?>
<?php
	include '../conect.php';
	
	$srch =$_POST['T_search'];
	//print_r($srch);
	$emp = array();
	if($srch !=null){
		
	$sqlsech = 'SELECT  id , name FROM addevent WHERE name LIKE "'.$srch.'%" ORDER BY name';
	
	$res = mysqli_query($database,$sqlsech);
	while($row=mysqli_fetch_assoc($res)){
		$emp[] = $row;
	}
	}
	echo json_encode($emp);
?>

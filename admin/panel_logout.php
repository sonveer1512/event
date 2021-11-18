<?php
	session_start();
	
	session_destroy();
	header("Location:panel_login.php");
?>
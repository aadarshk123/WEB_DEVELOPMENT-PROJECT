<?php 
	session_start();
	session_destroy();
	
	header("Location: project wb.html");
?>
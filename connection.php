<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db= "electro_store";
	$con = new mysqli($servername,$username,$password,$db)or die(mysqli_error($con));
	//echo "connection successfully ";
	
?>

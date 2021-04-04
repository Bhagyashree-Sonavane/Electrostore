<?php

include'../connection.php';
	$menuid = mysqli_real_escape_string($con,htmlspecialchars($_POST['catid']));
	$Name = mysqli_real_escape_string($con,htmlspecialchars($_POST['catname']));
	$details = mysqli_real_escape_string($con,htmlspecialchars($_POST['des']));
	
	
	$updateuser = "UPDATE tbl_category SET name='$Name', description='$details' WHERE id='$menuid'";
	
	$query = mysqli_query($con,$updateuser);
	if(empty($Name))
			{
				
				echo "<script> alert('Please Fill Name fields..!')</script>";
				echo "<script>window.location.href='edit_category.php'</script>";
			
			}
	
	if($query)
	{
		echo "<script>alert('Successfully Updated!')</script>";
		echo "<script>window.location.href='manage_category.php';</script>";
	}
	
	else
	{
		echo "Could not update data";
		echo "<script>window.location.href='manage_category.php';</script>";
	}
?>
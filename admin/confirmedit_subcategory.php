<?php

include'../connection.php';
	
			$menuid = mysqli_real_escape_string($con,htmlspecialchars($_POST['subcatid']));
	$c_id = mysqli_real_escape_string($con,htmlspecialchars($_POST['catid']));
	$subcatname= mysqli_real_escape_string($con,htmlspecialchars($_POST['subcatname']));
	$catname= mysqli_real_escape_string($con,htmlspecialchars($_POST['catname']));

	$des = mysqli_real_escape_string($con,htmlspecialchars($_POST['des']));
	
	
	$updateuser = "UPDATE tbl_subcategory SET c_id='$c_id',category='$catname',sub_category='$subcatname', description='$des' WHERE id='$menuid'";
	
	$query = mysqli_query($con,$updateuser);
	if(empty($subcatname) && empty($catname) && empty($c_id) && empty($des) && empty($menuid))
			{
				
				echo "<script> alert('Please Fill Name fields..!')</script>";
				echo "<script>window.location.href='edit_subcategory.php'</script>";
			
			}
	
	if($query)
	{
		echo "<script>alert('Successfully Updated!')</script>";
		echo "<script>window.location.href='manage_subcategory.php';</script>";
	}
	
	else
	{
		echo "Could not update data";
		echo "<script>window.location.href='manage_subcategory.php';</script>";
	}
?>
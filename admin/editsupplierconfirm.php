<?php


include('../connection.php');
$menuid = $_GET['id'];
//echo $menuid;
	//$Supplier_ID = mysqli_real_escape_string($con,htmlspecialchars($_POST['Supplier_ID']));
	$name = mysqli_real_escape_string($con,$_POST['Supplier_Name']);
		$pname = mysqli_real_escape_string($con,$_POST['pname']);
	$cat = mysqli_real_escape_string($con,$_POST['product_type']);
		$sub = mysqli_real_escape_string($con,$_POST['sub']);
	$des = mysqli_real_escape_string($con,$_POST['description']);
	$qty = mysqli_real_escape_string($con,$_POST['Quantity']);
	$price = mysqli_real_escape_string($con,$_POST['Price']);
	$total=$price*$qty;
	$email = mysqli_real_escape_string($con,$_POST['Email_ID']);
	$no = mysqli_real_escape_string($con,$_POST['Mobile_No']);
	$add = mysqli_real_escape_string($con,$_POST['Address']);
	

	//echo $menuid."<br>";echo $name."<br>";echo $type."<br>";echo $description."<br>";echo $Quantity."<br>";echo $Price."<br>";echo $Email_ID."<br>";echo $Mobile_No."<br>";echo $Address."<br>";
	
 
$updateuser = "update tbl_supplier SET pname='$pname',sub_cat='$sub',Supplier_Name='$name',total='$total',category_name='$cat',description='$des',Quantity='$qty',Price='$price',Email_ID='$email',Mobile_No='$no',Address='$add' where Supplier_ID='$menuid'";
//	echo $updateuser;
	
	$query = mysqli_query($con,$updateuser);
	
	if($query)
	{
		echo "<script>alert('Successfully Updated!')</script>";
	echo "<script>window.location.href='manage_supplier.php';</script>";
		
	}
	
	else
	{
		echo "<script> alert('Could not update data')</script>";
	//	echo "<script>window.location.href='manage_supplier.php';</script>";
	}
?>
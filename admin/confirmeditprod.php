<?php


include('../connection.php');
//$mid=$_POST['id'];

//echo $mid;
	$product_id = mysqli_real_escape_string($con,htmlspecialchars($_POST['product_id']));
	$product_name = mysqli_real_escape_string($con,htmlspecialchars($_POST['product_name']));
	$product_type = mysqli_real_escape_string($con,htmlspecialchars($_POST['product_type']));
	$product_subcategorie = mysqli_real_escape_string($con,htmlspecialchars($_POST['product_subcategorie']));
	$price = mysqli_real_escape_string($con,htmlspecialchars($_POST['price']));
	$discount = mysqli_real_escape_string($con,htmlspecialchars($_POST['discount']));
	$discount_price = mysqli_real_escape_string($con,htmlspecialchars($_POST['discount_price']));
	$stock = mysqli_real_escape_string($con,htmlspecialchars($_POST['stock']));
	$product_description = mysqli_real_escape_string($con,htmlspecialchars($_POST['product_description']));
//	$shipping = mysqli_real_escape_string($con,htmlspecialchars($_POST['shipping']));
	$product_availability = mysqli_real_escape_string($con,htmlspecialchars($_POST['product_availability']));
	
	$image1 = mysqli_real_escape_string($con,htmlspecialchars($_POST['photo']));


if(empty($product_id )||empty($stock)||empty($product_name)||empty($product_type)||empty($product_subcategorie)||empty($price)||empty($discount)||empty($discount_price)||empty($product_description)||empty($product_availability)||empty($image1))
		{
			echo "<script> alert('Please Fill all fields..!')</script>";
			echo "<script>window.location.href='edit_product.php'</script>";
				exit();
		}
      
$updateuser = "UPDATE tbl_product SET stock='$stock',name='$product_name',category='$product_type', subcategory='$product_subcategorie',selling='$price',discount='$discount',after_discount='$discount_price',description='$product_description',availability='$product_availability',photo='$image1' WHERE id='$product_id'";
	
	$query = mysqli_query($con,$updateuser);
	
	
	if($query)
	{
		echo "<script>alert('Successfully Updated!')</script>";
		echo "<script>window.location.href='manage_product.php';</script>";
		
	}
	
	else
	{
		echo "<script> alert('Could not update data')</script>";
		echo "<script>window.location.href='manage_product.php';</script>";
	}
?>
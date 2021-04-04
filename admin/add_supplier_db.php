<?php 
	session_start();
	include '../connection.php';
	if(isset($_POST['Submit']))
	{
	//	$sid=$_POST['Supplier_ID'];
		$sname=$_POST['Supplier_Name'];
		$pname=$_POST['Product_Company'];
		$category=$_POST['product_type'];
		$sub=$_POST['product_subcategorie'];
		$dec=$_POST['description'];
		$quantity=$_POST['Quantity'];
		$price=$_POST['Price'];
		//$total=$_POST['Total'];
		$total=$quantity*$price;
		$Email=$_POST['Email_ID'];
		$mobileno=$_POST['Mobile_No'];
		$address=$_POST['Address'];
		//echo $name;
		$sql="insert into tbl_supplier(Supplier_Name,pname,category_name,sub_cat,description,Quantity,Price,Total,Email_ID,Mobile_No,Address) values('$sname','$pname','$sub','$category','$dec','$quantity','$price','$total','$Email','$mobileno','$address')";
		//echo $sql."<br>";
		if(mysqli_query($con, $sql))
					{
						echo "<script>alert('Successfully  Supplier Added!')</script>";
						
						echo "<script>window.location.href='add_supplier.php'</script>";
					}
					else
					{
						echo "<script>alert('An error occured while uploading the entry to database. Please try again later.')</script>";
							echo" Error:".$con->error;
					}

		
	}
?>
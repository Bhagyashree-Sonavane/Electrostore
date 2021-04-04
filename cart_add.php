<?php
    require 'connection.php';

    session_start();

    $item_id=$_GET['pid'];

		$sql="select * from tbl_product where id=$item_id"; 
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$pname=$row["name"];
				$img=$row["photo"];
				$price=$row["after_discount"];
				
			}
		}
	
    $user_id=$_SESSION['user_id'];
	//echo $user_id;
	$sql="select * from tbl_user where id=$user_id"; 
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$username=$row["fname"];
					
			}
		}
	$date=date('d/m/y');

	$qty=$_POST['qty'];
	//echo $qty;
	
	$total=($price*$qty);
	
	 if(isset($_POST['qty']))
        {
					
    $add_to_cart_query="insert into tbl_cart(user_id,username,product_id,product_name,img,price,quantity,total,date) values ('$user_id','$username','$item_id','$pname','$img','$price','$qty','$total','$date')";
    $add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con));
	echo "<script>alert('Product add into Cart')</script>";
	
	echo "<script>	window.location.href='cart.php';</script>";
		}
		else
		{ echo "<script>alert('Error in Product add into Cart')</script>"; }
?>

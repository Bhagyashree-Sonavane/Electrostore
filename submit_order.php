<?php
session_start();
include'connection.php';
$uid=$_SESSION['user_id'];
$mode=$_GET['mode'];



$sql1="select * from tbl_shipping";
$result=$con->query($sql1);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{			
				$number=$row['mobile_no'];
				 $landmark=$row['landmark'];
				 $city=$row['city'];
				 $op=$row['add_type'];
			}
		}
		
		$type='Confirm';
	$date=date('d/m/y');
	
	
$sql="select * from tbl_cart where user_id=$uid and checkout='' ";
$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$uid=$row['user_id'];
				$uname=$row['username'];
				$pid=$row['product_id'];
				$pname=$row['product_name'];
				$img=$row['img'];
				$price=$row['price'];
				$qty=$row['quantity'];
				$total=$row['total'];
				
			
		
	
	
	 $add_to_order_query="insert into tbl_order(user_id,username,product_id,product_name,img,price,qty,total,mobile_no,landmark,city,add_type,status,date,payment_mode) values ('$uid','$uname','$pid','$pname','$img','$price','$qty','$total','$number','$landmark','$city','$op','$type','$date','$mode')";
    $add_to_order_result=mysqli_query($con,$add_to_order_query) or die(mysqli_error($con));
		
	if(! $add_to_order_result)
			{
				echo "<script>alert('Order is Not Placed!!!')</script>";
				
			}
			else
			{
				
				$sql="SELECT max(order_id) FROM tbl_order";
				$result = mysqli_query($con,$sql); 
				if(mysqli_num_rows($result)>0)
				{
					while($row = mysqli_fetch_array($result)) 
					{
						$id = $row['max(order_id)'];
					//	echo "order id".$id;
						$order = $id;
					//	echo "order id".$order;

				$to = "bhagi.web@gmail.com";

				$subject = "New Order is placed";
				
				$message = "Please Check the Order (order id) is".$id." & Payment of order is placed in " . $mode;

				$headers = "From :' bhagi.web@gmail.com'";
				if(mail($to, $subject, $message, $headers))
				{
					echo "<script>alert('Your Order is Placed')</script>";
				}else
				{
					echo "<script>alert('Failed to mail ,try again')</script>";
				}
			}
		}}
		}
	}
	$cart="update tbl_cart set checkout='y' where user_id=$uid";
	$remove=mysqli_query($con,$cart) or die(mysqli_error($con));
	if(! $remove)
	{
		echo "<script>alert('Cart is Empty!!')</script>";
		
	}
	
	$stock="update tbl_product set stock=(stock-'$qty') where id=$pid";
	$update=mysqli_query($con,$stock)or die(mysqli_error($con));
	if(! $update)
	{
		echo "<script>alert('Stock is Not Reduce!!')</script>";
		
	}
	else
	{
		//echo "<script>alert('Stock is Reduce!!')</script>";
	}
	
		
$sql="select * from tbl_product where id=$pid";
$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$stock=$row['stock'];
			}
		}
	
	if($stock=0)
	{
		$stock="update tbl_product set availability='no' where id=$pid";
		$update=mysqli_query($con,$stock)or die(mysqli_error($con));
		if(! $update)
		{
			echo "<script>alert('Availability Not Changed!!')</script>";
			
		}
		else
		{
			//echo "<script>alert('Availability is Changed!!')</script>";
		}
	}
	
	echo "<script>window.location.href='receipt1.php'</script>";

?>
<?php
session_start();
include'connection.php';
$uid=$_SESSION['user_id'];
//echo $uid;
$sql="select * from tbl_cart";
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
			}
		}
 $date=date('d/m/y');
 $name=$_POST['name'];
 $number=$_POST['number'];
 $landmark=$_POST['landmark'];
 $city=$_POST['city'];
 $op=$_POST['1option'];
 
	
	$add_to_order_query="insert into tbl_shipping(uid,ship_name,landmark,mobile_no,city,add_type,date) values ('$uid','$name','$landmark','$number','$city','$op','$date')";
    $add_to_order_result=mysqli_query($con,$add_to_order_query) or die(mysqli_error($con));
	
	if(!$add_to_order_result)
	{
		echo "<script>alert('Shipping Details Not Update')</script>";
	}

	$sql="select id,stock,name from tbl_product";
	$result=$con->query($sql);
			if ($result->num_rows> 0) 
			{
				while($row = $result->fetch_assoc()) 
				{
					$stock=$row['stock'];
					if($stock<5)
					{
						$id[] = $row['id'];
						$names[] = $row['name'];
					}	
				}
			}	
		
$json = json_encode($id); 
//echo $json;

$json1 = json_encode($names); 
//echo $json1;

$to = 'bhagi.web@gmail.com';
					//echo $to."<br>";

					$subject = "Product Stock is Less than 5";
					
					$message = "Please add the stock of product otherwise product is out off stock . List of Product  Id: " . $json . "Name :".$json1;
					//echo $message."<br>";

					$headers = "From :' bhagi.web@gmail.com'";
					if(mail($to, $subject, $message, $headers)){
						echo "<script>alert('Done')</script>";
					}else{
						echo "<script>alert('Failed , try again')</script>";
						}
	echo "<script>	window.location.href='payment.php';</script>"; 
?>
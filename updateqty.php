<?php
include('connection.php');
session_start();

if (isset($_SESSION['user_id']))
{
	$userid = $_SESSION['user_id'];
}

else
{
	$userid = "";
}


$pid = $_POST['txt'];


$sql = "SELECT * FROM tbl_cart WHERE user_id = '$userid' AND product_id = '$pid' AND checkout = ' '";
$query = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
	$id = $row['id'];
	$pid = $row["product_id"];
	$qty = $row["quantity"];
	$userid = $row["user_id"];
	$checkout = $row['checkout'];
	
}

if($qty >= 15)
{
	echo "<script>alert('You cannot add more than this!')</script>";
	echo "<script>window.location.href='cart.php';</script>";
}

else
{
	$qty = $qty + 1;
	$sql = "UPDATE tbl_cart SET quantity ='$qty' WHERE id = '$id'";
	$updateqty = mysqli_query($con, $sql);
	//echo "<script>alert('Updated item by one')</script>";
	echo "<script>window.location.href='cart.php';</script>";
}

// Close your database connection
mysqli_close($con);

?>
 
<?php
session_start();
include('connection.php');

 $U_id = $_SESSION['user_id'];
 
 $p_id = $_GET['id'];
 
 
 $sql="delete from tbl_cart where user_id='$U_id' and product_id='$p_id' and checkout='' ";
// echo $sql;
				if(mysqli_query($con,$sql))
				{
				//	echo "<script>alert('product remove from cart')</script>";
					echo "<script>window.location.href='product_show.php'</script>";
				}
				else
				{
					echo "Error deleting record :".mysqli_error($con);
				}
?>

 
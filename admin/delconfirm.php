<?php
include('../connection.php');
 
 $id = $_GET['id'];
 
 $type = $_GET['type'];

 
 
switch($type)
{
	case 'product':
				$sql="delete from tbl_product where id='$id'";
				if(mysqli_query($con,$sql))
				{
					echo "<script>alert('Item having item id $id has been deleted')</script>";
					echo "<script>window.location.href='manage_product.php'</script>";
				}
				else
				{
					echo "Error deleting record :".mysqli_error($con);
				}
				break;
	
	case 'user':
			$sql="delete from tbl_user where id='$id'";
				if(mysqli_query($con,$sql))
				{
					echo "<script>alert('User Name Having User Id $id has been deleted')</script>";
					echo "<script>window.location.href='viewusers.php'</script>";
				}
				else
				{
					echo "Error deleting record :".$con->error;
				}
			break;

	
	case 'subcat':
				$sql="delete from tbl_subcategory where id='$id'";
				if(mysqli_query($con,$sql))
				{
					echo "<script>alert('Subcategory $id has been deleted')</script>";
					echo "<script>window.location.href='manage_subcategory.php'</script>";
				}
				else
				{
					echo "Error deleting record :".mysqli_error($con);
				}
				break;
			
	
	case 'cat':
			$sql="delete from tbl_category where id='$id'";
				if(mysqli_query($con,$sql))
				{
					echo "<script>alert('Category $id has been deleted')</script>";
					echo "<script>window.location.href='manage_category.php'</script>";
				}
				else
				{
					echo "Error deleting record :".mysqli_error($con);
				}
			break;
	case 'supplier':
			$sql="delete from tbl_supplier where Supplier_ID='$id'";
				if(mysqli_query($con,$sql))
				{
					echo "<script>alert('Supplier having  $id has been deleted')</script>";
					echo "<script>window.location.href='manage_supplier.php'</script>";
				}
				else
				{
					echo "Error deleting record :".mysqli_error($con);
				}
			break;
	case 'feed':
			$sql="delete from tbl_contact where id='$id'";
				if(mysqli_query($con,$sql))
				{
					echo "<script>alert('Feedback of  having '$id' has been deleted')</script>";
					echo "<script>window.location.href='manage_feedback.php'</script>";
				}
				else
				{
					echo "Error deleting record :".mysqli_error($con);
				}
			break;
			
		case 'order':
			$sql="delete from tbl_order where order_id='$id'";
				if(mysqli_query($con,$sql))
				{
					//echo "<script>alert('Feedback of  having  $id has been deleted')</script>";
					echo "<script>window.location.href='pending.php'</script>";
				}
				else
				{
					echo "Error deleting record :".mysqli_error($con);
				}
			break;
			
	
	
} 

?>

 
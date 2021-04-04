<?php 
	session_start();
	$pid=$_GET['pid'];
	include 'connection.php';
	if (isset($_SESSION['username']))
	{ 

	$User = $_SESSION['username']; 
	}
else 
{ 
	
	$User = ""; 
}
	if(isset($_POST['submit']))
	{
		$comment=$_POST['message'];
		
		$sql="insert into tbl_review(pid,username,review) values('$pid','$User','$comment')";
		//echo $sql."<br>";
		if(mysqli_query($con, $sql))
					{
						echo "<script>alert('Review added successfully!')</script>";
						
						echo "<script>window.location.href='product_info.php?pid=$pid'</script>";
					}
					else
					{
						echo "<script>alert('Please try again later.')</script>";
							echo" Error:".$con->error;
					}

		
	}
?>
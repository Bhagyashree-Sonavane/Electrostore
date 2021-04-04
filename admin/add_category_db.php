<?php 
	session_start();
	include '../connection.php';
	if(isset($_POST['Submit']))
	{
		$name=$_POST['category'];
		$dec=$_POST['description'];
		//echo $name;
		$sql="insert into tbl_category(name,description) values('$name','$dec')";
		//echo $sql."<br>";
		if(mysqli_query($con, $sql))
					{
						echo "<script>alert('Successfully  Category Added!')</script>";
						
						echo "<script>window.location.href='category.php'</script>";
					}
					else
					{
						echo "<script>alert('An error occured while uploading the entry to database. Please try again later.')</script>";
							echo" Error:".$con->error;
					}

		
	}
?>
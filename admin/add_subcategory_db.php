<?php 
	session_start();
	include '../connection.php';
	if(isset($_POST['Submit']))
	{
		$catname=$_POST['category_name'];
		
						
						
						$sql="SELECT * FROM tbl_category where name='$catname'";
					
						$result=mysqli_query($con,$sql);
						if(mysqli_num_rows($result))
						{
						while($row=mysqli_fetch_array($result))
									{
										$c_id=$row['id'];
									}
						}			
										
											
		$subname=$_POST['sub_category'];
		$dec=$_POST['description'];
		//echo $name;
		$sql="insert into tbl_subcategory(category,c_id,sub_category,description) values('$catname','$c_id','$subname','$dec')";
		//echo $sql."<br>";
		if(mysqli_query($con, $sql))
					{
						echo "<script>alert('Successfully  Sub-Category Added!')</script>";
						
						echo "<script>window.location.href='sub_category.php'</script>";
					}
					else
					{
						echo "<script>alert('An error occured while uploading the entry to database. Please try again later.')</script>";
							echo" Error:".$con->error;
					}

		
	}
?>
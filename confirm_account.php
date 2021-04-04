<?php
session_start();
include 'connection.php';
if(isset($_SESSION['user_id']))
{
	$id = $_GET['id'];
	//$id = mysqli_real_escape_string($con,htmlspecialchars($_POST['id']));
	$name = mysqli_real_escape_string($con,htmlspecialchars($_POST['name']));
	$lname = mysqli_real_escape_string($con,htmlspecialchars($_POST['lname']));
	$email = mysqli_real_escape_string($con,htmlspecialchars($_POST['email']));
	$contact = mysqli_real_escape_string($con,htmlspecialchars($_POST['mobile']));
	$address = mysqli_real_escape_string($con,htmlspecialchars($_POST['address']));
	//echo $name;
	//echo $lname;
	//echo $email;
	//echo $contact;
	//echo $address;
	
	
}

else
{
	echo "ERROR!!!";
}
	
	$updateuser = "UPDATE tbl_user SET fname='$name',lname='$lname',email='$email',mobile='$contact',address='$address' WHERE id='$id'";
	
	
	$result = mysqli_query($con,$updateuser);

	
	if($result)
	{
		
		echo "<script>alert('Successfully Updated!')</script>";
		// $_SESSION['id']=$row['id'];  //user id
   ?>   <script>window.location.href='myaccount.php?id=<?php echo $id;?>'</script>
	<?php
	}	
	else
	{
		echo "<script> alert('Could not update data')</script>";
		echo "<script>window.location.href='myaccount.php';</script>";
	}
?>
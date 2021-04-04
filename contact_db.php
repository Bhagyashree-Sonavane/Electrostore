<?php 
	session_start();
	include 'connection.php';
	if(isset($_POST['submit']))
	{
		
		$name=$_POST['name'];
		$E_ID=$_POST['email'];
		$msg=$_POST['message'];
		//echo $name;
		$sql="insert into tbl_contact(name,email,message) values('$name','$E_ID','$msg')";
		//echo $sql."<br>";
		if(mysqli_query($con, $sql))
					{
						echo "<script>alert('Successfully   Added!')</script>";
						
					//	echo "<script>window.location.href='contact.php'</script>";
					}
					else
					{
						echo "<script>alert('An error occured while uploading the entry to database. Please try again later.')</script>";
							echo" Error:".$con->error;
					}

		
	}

	require_once('forget_con.php');
 
			$name = mysqli_real_escape_string($connection,$_POST['name']);
			$email = mysqli_real_escape_string($connection,$_POST['email']);
			$msg = mysqli_real_escape_string($connection,$_POST['message']);


$to = 'bhagi.web@gmail.com';

$subject = "Contact us - ".$email."(".$name.")";
 
$message = $msg;

$headers = "From :bhagi.web@gmail.com";

if(mail($to, $subject, $message, $headers))
{
	echo "<script>alert('Your Form is submited')</script>";
	echo "<script>	window.location.href='index.php';</script>";
}else{
	echo "<script>alert('Failed to Send, try again')</script>";
	echo "<script>	window.location.href='contact.php';</script>";
}
	  ?>
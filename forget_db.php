 <?php
	require_once('forget_con.php');
 ?>
 <?php 
	  if(isset($_POST['email']) & !empty($_POST['email']))
	  {
			$username = mysqli_real_escape_string($connection,$_POST['email']);
			
			$sql = "SELECT * FROM tbl_user WHERE email ='$username'";
			$res = mysqli_query($connection,$sql);
			$count = mysqli_num_rows($res);
			if($count == 1)
			{
				echo "<script>alert('Send email to user with password')</script>";
				
			}else
			{
				echo "<script>alert('User name does not exist in database')</script>";
				echo "<script>	window.location.href='index.php';</script>";
			}
			
	}



$r = mysqli_fetch_assoc($res);

$password = $r['password'];
//echo $password."<br>";

$to = $r['email'];
//echo $to."<br>";

$subject = "Your Recovered Password";
 
$message = "Please use this password to login " . $password;
//echo $message."<br>";

$headers = "From :' bhagi.web@gmail.com'";
if(mail($to, $subject, $message, $headers)){
	echo "<script>alert('Your Password has been sent to your email id')</script>";
	echo "<script>	window.location.href='index.php';</script>";
}else{
	echo "<script>alert('Failed to Recover your password, try again')</script>";
	echo "<script>	window.location.href='forget_form.php';</script>";
}
	  ?>
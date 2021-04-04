<?php 
	session_start();
	include '../connection.php';
	if(isset($_POST['btn_login']))
	{
		
		$uname=$_POST['name'];
		$pwd=$_POST['password'];
		//echo $uname;
		$sql="select * from tbl_admin where name='$uname' and password='$pwd'";

		$r=mysqli_query($con,$sql);
		$c=mysqli_num_rows($r);
		if($c==1)
		{
					$_SESSION['admin']=$uname;
					header('Location:index.php');
		}
		else{
			 echo"<script> alert('Username and password are incorrect')</script>";
					header('Location:login.php');
		}
	}
?>
		
			
		
		
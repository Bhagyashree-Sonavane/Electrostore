<?php
 
			include ("connection.php");
			session_start();
			$fname=mysqli_real_escape_string($con,$_POST['fname']);
			$lname=mysqli_real_escape_string($con,$_POST['lname']);
			$email = mysqli_real_escape_string($con,$_POST['email']);
			$mobile = mysqli_real_escape_string($con,$_POST['number']);
			$address = mysqli_real_escape_string($con,$_POST['address']);
			
			$password = mysqli_real_escape_string($con,$_POST['pass']);
			$repassword = mysqli_real_escape_string($con,$_POST['cpass']);
			
			$name = "/^[A-Z][a-zA-Z ]+$/";
			//$name = "/^[a-zA-Z ]+$/";
			
			$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
			$number = "/^[0-9]+$/";
				$date=date('Y-m-d');
			if(empty($fname)||empty($lname)||empty($email) || empty($mobile) || empty($password) || empty($repassword)||
			 empty($address))
			{
				echo "<script> alert('Please Fill all fields..!')</script>";
				echo "<script>window.location.href='index.php'</script>";
				exit();
			} 
			else 
			{
			if(!preg_match($name,$fname))
				{
					echo "<script> alert('Enter First Letter Must be Capital ..!')</script>";
					echo "<script>window.location.href='index.php'</script>";
					exit();
				}
				if(!preg_match($name,$lname))
				{
					echo "<script> alert('Enter First Letter Must be Capital ..!')</script>";
					echo "<script>window.location.href='index.php'</script>";
					exit();
				}
				
				if(!preg_match($emailValidation,$email))
				{
					echo "<script> alert('This email is incorrect..!')</script>";
					echo "<script>window.location.href='index.php'</script>";
					exit();
				}
				
				if(strlen($password) <5 )
				{
					echo "<script> alert('Password is weak')</script>";
					echo "<script>window.location.href='index.php'</script>";
					exit();
				}
				if(strlen($repassword) < 5 )
				{
					echo "<script> alert('Password is weak!')</script>";
					echo "<script>window.location.href='index.php'</script>";
					exit();
				}
				if($password != $repassword)
				{
					echo "<script> alert('Password is not same')</script>";
					echo "<script>window.location.href='index.php'</script>";
					exit();
				}
				if(!preg_match($number,$mobile))
				{
					echo "<script> alert('This mobile number is incorrect..!.!')</script>";
					echo "<script>window.location.href='index.php'</script>";
					exit();
				}
				if(!(strlen($mobile) == 10)){
					echo "<script> alert('Mobile number must be 10 digit')</script>";
					echo "<script>window.location.href='index.php'</script>";
					exit();
				}

				// This first query is just to get the total count of rows
				$sql = "SELECT id FROM tbl_user WHERE email = '$email' LIMIT 1" ;
				
				$query = mysqli_query($con, $sql);

				$row = mysqli_fetch_row($query);
				
				// Here we have the total row count
				$rows = $row[0];
			
					if($rows == 0)
					{	
						$insertSQL ="INSERT INTO tbl_user VALUES ('','$fname','$lname','$email','$mobile','$address','$password','$date')";
							
						
						
						if(mysqli_query($con, $insertSQL))
						{
							echo "<script>alert('You are Registered successfully..!!')</script>";
							
							echo "<script>alert('You Must login Now !!')</script>";
							
							echo "<script>window.location.href='index.php'</script>";
						}
						else
						{
							echo "<script>alert('An error occured while uploading the entry to database. Please try again later.')</script>";
								echo" Error:".$con->error;
						}
					}
			
					else
					{
						echo "<font color='red'><script>alert('Sorry This user already exists!')</script></font>";
						//echo "<script>alert('Redirecting...')</script>";
						echo "<script>window.location.href='index.php'</script>";
					}
			}
			// Close your database connection
			mysqli_close($con);
?>
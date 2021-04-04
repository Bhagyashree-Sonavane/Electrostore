<?php 
session_start();
include_once('connection.php');
    require 'check_if_added.php';

// User is already logged in. Redirect them somewhere useful.
if (isset($_SESSION['user_id']))
{
	$id = $_SESSION['user_id'];
	
	
			$sql="SELECT * FROM tbl_user where id = '$id' ";
			
			$result = mysqli_query($con,$sql); 
			
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array( $result )) 
				{
					//$id = $row['id'];
					$name=$row['fname'];
					$lname=$row['lname'];
					$email =$row['email'];
					$contact =$row['mobile'];
					//$bdate =$row['bdate'];
					//$city = $row['city'];
					$address = $row['address'];
					//$pincode=$row['pincode'];
				}
			}
			else
			{
				echo" Error:".$con->error;
			}
	
	
	
}

else
{
	$user_id = "";
}
?>
<html>
<head>
 <title>Electro Store</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>
<body>

<?php

if (isset($_SESSION['user_id']) && isset($_SESSION['username']))
	{ 
	$userid = $_SESSION['user_id']; 
	$User = $_SESSION['username']; 
	}
else 
{ 
	$userid = "";
	$User = ""; 
}

//echo $userid; 
//echo $User; 

if($userid!= "")
{
	include("header_log.php");
}
else
{
	include("header.php");
	
}
?>



	
	
	<div class="address py-5">
		<div class="container py-xl-5 py-lg-3">
			
	<div class="row address-row">
				<div class="col-lg-3 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
						<h4 class="font-weight-bold mb-3">Hello,</h4>
						<h6><b><?php echo $name; ?></b></h6>
						<p><?php echo $email; ?></p>
					</div>
			   
				<br>
					<div class="address-info wow fadeInRight animated" data-wow-delay=".7s">
						<h6>
							<b>
								<i class="fa fa-cart-arrow-down" style="font-size:20px;color:red"></i>
								<a href="myorder.php?id=<?php echo $id ;?>">My Order</a>
							</b>
						</h6><br>
						<h6><b><i class="fa fa-user-circle" style="font-size:20px;color:red"></i><a href="myaccount.php?id=<?php echo $id ;?> "> My Profile</a></b></h6><br>
						<h6><b><i class="fa fa-check-square" style="font-size:20px;color:red"></i><a href="settings.php?id=<?php echo $id ;?>"> Change Password</a></b></h6><br>
						<h6><b><i class="fa fa-share-square" style="font-size:20px;color:red"></i><a href="logout.php"> Logout</a></b></h6>
					</div>
				</div>
				
	
				<div class="col-sm-9 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
					<a href="account_db.php"><h5 align="right">Edit</h5></a>
						<form>
							<center><h2><b>Personal Information<br></h2></center>
							First Name<input id="name" name="fname" class="form-control" value="<?php echo $name;?>"readonly>
							Last Name<input id="name" name="lname" class="form-control" value="<?php echo $lname;?>"readonly>
						Mobile Number<br>
							<input id="contact" name="mobile" class="form-control" value="<?php echo $contact;?>"readonly>
						Email<br>
							<input id="email" name="email" class="form-control" value="<?php echo $email;?>"readonly>
						
						Address<br>
							<input id="address" name="address" class="form-control" value="<?php echo $address;?>"readonly>

						
						</b>
						</form>
						
					</div>
				</div>
	</div><br>
	
	</div>
</div>


	<?php
include('footer.php');
?>
<script src="js/jquery-1.10.2.js"></script>   
		<script src="js/bootstrap.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>

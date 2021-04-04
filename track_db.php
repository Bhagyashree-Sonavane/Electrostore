<?php 
session_start();
include_once('connection.php');

$uid=$_SESSION['user_id'];
 $track=mysqli_real_escape_string($con,$_POST['track']);



$sql="select * from tbl_order where order_id=$track and user_id=$uid";	
//echo $sql;	
								$result=$con->query($sql);
								
								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc()) 
									{  
									$status=$row['status'];
									$placedate=$row['date'];
									}
								}
								else
								{
									echo '<script>alert("Unauthorized Access!");</script>';
									echo "<script>window.location.href='index.php';</script>";	
								}
	
$deliverydate=date('d/m/y');
	
?>


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



<!doctype html>
<html>
<head>
<title>Electro Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shipment Track Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="track_css/style.css" rel="stylesheet" type="text/css" media="all" />
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

<div class="header">
	<h1>Shipment Track</h1>
</div>

<div class="content">
	<div class="content1">
		<h2>Order Tracking:<b> Order No (<?php echo $track; ?>)</b></h2>
	</div>
	<div class="content2">
		<div class="content2-header1">
			<p>Place Date       <br><span><?php echo $placedate; ?></span></p>
		</div>
		<div class="content2-header1">
			<p>Status     <br>
			<span><?php echo $status; ?></span></p>
		</div>
		<div class="content2-header1">
			<p>Delivered Date    <span><?php if($status=='Deliver') {echo $deliverydate; } ?></span></p>
		</div>
		<div class="clear"></div>
	</div>
	
		<!--------1----------------->
		
		
	<?php	
	if($status=='Confirm')
	{

		?>
		<div class="content3">
        <div class="shipment">
		<div class="confirm">
			<img src="images/color.png">
		</div>
			<div class="confirm">
                <div class="imgcircle">
                    <img src="images/confirm.png" alt="confirm order">
            	</div>
				<span class="line"></span>
				<p>Confirmed Order</p>
			</div>
			<div class="dispatch">
           	 	<div class="imgcircle">
                	<img src="images/dispatch.png" alt="process order">
            	</div>
				<span class="line"></span>
				<p>Processing Order</p>
			</div>
			
			<div class="delivery">
				<div class="imgcircle">
                	<img src="images/delivery.png" alt="delivery">
				</div>
				<p>Product Delivered</p>
			</div>
			<div class="clear"></div>
		</div>
		</div>
		<?php
		
	}
		?>
		<!----2--------------------------------->
	<?php	
	if($status=='Pending')
	{

		?>	
		<div class="content3">
        <div class="shipment">
		<div class="confirm">
			<img src="images/color.png">
		</div>
			<div class="confirm">
                <div class="imgcircle">
                    <img src="images/confirm.png" alt="confirm order">
            	</div>
				<span class="line"></span>
				<p>Confirmed Order</p>
			</div>
			<div class="process">
           	 	<div class="imgcircle">
                	<img src="images/dispatch.png" alt="process order">
            	</div>
				<span class="line"></span>
				<p>Processing Order</p>
			</div>
			
			<div class="delivery">
				<div class="imgcircle">
                	<img src="images/delivery.png" alt="delivery">
				</div>
				<p>Product Delivered</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<?php } ?>
	
	<!-----------3------------------->
	<?php	
	if($status=='Deliver')
	{

		?>
		<div class="content3">
        <div class="shipment">
		<div class="confirm">
			<img src="images/color.png">
		</div>
			<div class="confirm">
                <div class="imgcircle">
                    <img src="images/confirm.png" alt="confirm order">
            	</div>
				<span class="line"></span>
				<p>Confirmed Order</p>
			</div>
			<div class="process">
           	 	<div class="imgcircle">
                	<img src="images/dispatch.png" alt="process order">
            	</div>
				<span class="line"></span>
				<p>Processing Order</p>
			</div>
			
			<div class="quality">
				<div class="imgcircle">
                	<img src="images/delivery.png" alt="delivery">
				</div>
				<p>Product Delivered</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
	<?php } ?>
<br></div>

</div>
<br>
<?php
include('footer.php');
?>
<script src="js/jquery-1.10.2.js"></script>   
		<script src="js/bootstrap.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>
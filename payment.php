<?php
include('connection.php');
session_start();
// User is already logged in. Redirect them somewhere useful.
if (isset($_SESSION['user_id']))
{
	$id = $_SESSION['user_id'];
}

else
{
	$id = "";
}
//echo $id;
?>
<!DOCTYPE html>
<html lang="zxx">

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

			
		<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span> Select your Payment Method</span></h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<!--Horizontal Tab-->
				<div id="parentHorizontalTab">
					<ul class="resp-tabs-list hor_1">
						<li>Cash on delivery</li>
						<li>Paytm </li>
						<li>PhonePe </li>
						<li>Google Pay </li>
					</ul>
					<div class="resp-tabs-container hor_1">

						<div>
							<div class="vertical_post check_box_agile">
							<div class="checkbox">
									<div class="check_box_one cashon_delivery">
										<label class="anim">
			<form name="payment" method="post" action="submit_order.php?mode=<?php echo "COD"; ?>">
								<img src="images/cash.png" width="150"height="90" alt="No Img "><br>
							<input type="radio" name="paymethod" value="COD" checked="checked"> COD ( Cash On Delivery )
							<br>
							 
							 <input type="submit" value="Submit">
								</form>
										</label>
									</div>

								</div>
							</div>
						</div>
						
						
						<div>
							<div id="tab4" class="tab-grid" style="display: block;">
								<div class="row">
									<div class="vertical_post check_box_agile">
									<div class="col-md-12 pay-forms">
										<label class="anim">
										<form name="payment" method="post" action="submit_order.php?mode=<?php echo "Paytm"; ?>">
										<h3>Scan This QR Code For Online Payment</h3><br>
											<img src="images/paytm.jpeg"width="300"height="300" alt="No Img "><br>
											<b>Important Note : </b>After Paytm Transaction You Must Click on Below Button
											<br>
											<input type="submit" value="Submit">
										</form>
										</label>
									</div>
									</div>
								</div>
							</div>
						</div>
						
						<div>
							<div id="tab4" class="tab-grid" style="display: block;">
								<div class="row">
									<div class="vertical_post check_box_agile">
									<div class="col-md-12	pay-forms">
										<label class="anim">
										<form name="payment" method="post" action="submit_order.php?mode=<?php echo "Phonepay";?>">
										<h3>Scan This QR Code For Online Payment</h3><br>
											<img src="images/phone.jpeg" width="300"height="300" alt="No Img "><br>
											<b>Important Note : </b>After Phonepay Transaction You Must Click on Below Button
											<br>
											<input type="submit" value="Submit">
										</form>
										</label>
									</div>
									</div>
								</div>
							</div>
						</div>
						
						<div>
							<div id="tab4" class="tab-grid" style="display: block;">
								<div class="row">
								<div class="vertical_post check_box_agile">
									<div class="col-md-12	pay-forms">
										<label class="anim">
										<form name="payment" method="post" action="submit_order.php?mode=<?php echo "Googlepay";?>">
											<h3>Scan This QR Code For Online Payment</h3><br>
											<img src="images/google.jpeg" width="300"height="300" alt="No Img "><br>
											<b>Important Note : </b>After Googlepay Transaction You Must Click on Below Button
											<br>
											<input type="submit" value="Submit">
										</form>
										</label>
									</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!--Plug-in Initialisation-->
			</div>
		</div>
	</div>
	<!-- //payment page -->
	

<?php include("footer.php");  ?>
</body>

</html>
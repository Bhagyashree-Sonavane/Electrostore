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
<?php
		$totalquantity = 0;
				$subtotal = 0;
				$totalamount = 0;
				
		$sql="select * from tbl_cart where user_id=$id  and checkout=''"; 
		//echo $sql;
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			?>
<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>art Details
			</h3>
			<div class="checkout-right">
				
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SR No.</th>
								<th>Product Id</th>
								<th>Product</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th colspan="2">Update Qty</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
<?php
			while($row = $result->fetch_assoc()) 
			{					
				$i=1;
				$price=$row['price'];
				$qty=$row['quantity'];
				$img=$row['img'];
				$product_id=$row['product_id'];
				$amount = ($qty * $price);
				
				$totalquantity = $totalquantity + $qty;
				
				$subtotal = $subtotal + $amount;
				
				$delivery=300;
				
				$totalamount = ($subtotal + $delivery);
									
		?>
	
	
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $product_id;?></td>
								<td>
										<img src="admin/uploads/<?php echo $row['img'];?>"  width="50px"height="60px" class="img-responsive">
								</td>
								
								<td><?php echo $row['product_name'];?></td>
								<td><?php echo $price;?></td>
								<td><?php echo $qty;?></td>
								<td><?php echo $amount;?></td>
								<td>
									<form method="post" action="updateqty.php">
										<input type="hidden" size="4" name="txt" value="<?php echo $product_id; ?>">
										<input type="submit" value="+1">
									</form>
								</td>
								<td>
									<form method="post" action="removeqty.php">
										<input type="hidden" size="4" name="txt" value="<?php echo $product_id; ?>">
										<input type="submit" value="-1" name="submit" />
									</form>
								</td>
								<td>
									<div class="rem">
										<a href="remove_cart.php?id=<?php echo $product_id; ?>"><div class="close1"> </div></a>
									</div>
								</td>
							</tr>
							
						
						<?php  
	$i++;
	
	}
	?></tbody>
					</table>
					<br><br>
					<table border="1" align="center" width="300px">
						<tr align="center">
							<td width="150px"><b>Total Quantity</b>
							</td><td width="150px"><?php echo $totalquantity;?></td>
						</tr>
						
						<tr align="center">
							<td><b>Sub Total</b></td><td><?php echo $subtotal;?></td>
						</tr>
						
						<tr align="center">
							<td><b>Delivery Cost</b></td><td><?php echo $delivery;?></td>
						</tr>
						<tr align="center">
							<td><b>Total Amount</b></td><td><?php echo $totalamount;?></td>
						</tr>
					</table><br><br>
					<center>
					<a href="product_show.php">
							<Button class="submit check_out btn" name="continue">Continue Shopping</Button>
						</a>
				<a href="checkout.php">
							<Button class="submit check_out btn"  name="proced">Proceed to checkout</Button>
						</a>
				</center>
<?php	} 
		
		
		
		else
		{ ?><br>
	<center><h3>Sorry Your Cart is Empty!!!!</h3>
		<img src="images/empty.png" height="400" width="600" ></center><br>
	<?php	
		}
		?>

						
				</div>
			</div>
	</div>
	

<?php include("footer.php");  ?>
</body>

</html>
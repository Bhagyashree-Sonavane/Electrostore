<?php 
include('connection.php');
session_start();
// User is already logged in. Redirect them somewhere useful.
if (isset($_SESSION['user_id']))
{
	$U_id = $_SESSION['user_id'];
}

else
{
	$U_id = "";
}
//echo "User id=".$U_id;


$pid=$_GET['pid'];
//echo "Product id=".$pid;
//$stock_get=$_GET['s'];
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
// include('header.php');

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
<html>
	<head>
		 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"  crossorigin="anonymous">
		 <script src="https://code.jquery.com/jquery-2.2.2.min.js"  integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>
		 <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		 <link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
		 <style>
			.monospaced { font-family: 'Ubuntu Mono', monospaced ; }
			.add-to-cart .btn-qty { width: 52px; height: 46px;	}
			.add-to-cart .btn { border-radius: 0; }
		</style>
	</head>
	<body>
	<?php
	$sql="select * from tbl_product where id=$pid and stock>0"; 
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
			
	?>
	<div class="container" id="product-section">
	<br><br><br>
		  <div class="row">
			   <div class="col-md-6">	
					<img src="admin/uploads/<?php echo $row['photo']; ?>"class="image-responsive" height="400" width="500" alt="Kodak Brownie Flash B Camera" >				
			   </div>
			   <div class="col-md-6">
					   <div class="row">
						  <div class="col-md-12">
						   <h1><?php echo $row["name"]; ?></h1>
						 </div>
						 <div class="col-md-12">
						  <span class="label label-primary"><?php echo $row["category"]; ?></span>
						    
						  <span class="monospaced"><?php echo $row["subcategory"]; ?></span>
						 </div>
					   </div>
						<!---<div class="row">
							 <div class="col-md-12">
							  <p class="description">
							   Classic film camera. Uses 620 roll film.
							   Has a 2&frac14; x 3&frac14; inch image size.
							  </p>
							 </div>
						</div>-->
						<br>
						<div class="row">
							 <div class="col-md-3">
								  <span class="sr-only">Four out of Five Stars</span>
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								  <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
								  <span class="label label-success">4</span>
							 </div>
						</div>
					<!--	<div class="row">
							 <div class="col-md-3">
								  <span class="monospaced">Write a Review</span>
							 </div>
						</div>-->
						<div class="row">
							 <div class="col-md-12 bottom-rule">
								<h2 class="product-price">Price. Rs.<?php echo $row["after_discount"]; ?>/-</h2>
							 </div>
					
							 <div class="col-md-12 bottom-rule">
								<h4 class="product-price">
										<strike><?php echo $row["selling"]; ?></strike>/-
										<font color="red">(<?php echo $row["discount"]; ?>)% Off</font>
								</h4>
							 </div>
						</div>
						<div class="row add-to-cart">
						  <div class="col-md-3 product-qty">
						  <form action="cart_add.php?pid=<?php echo $pid; ?>" method="post">
							Quantity : <input type="text" class="product-quantity" name="qty" value="1" size="2" />
						 
						 </div>
					</div><br>
					
					<div class="row">
						<div class="col-md-12 bottom-rule top-10"></div>
						<div class="col-md-12 bottom-rule top-10"></div>
						<div class="col-md-12 bottom-rule top-10"></div>
						<div class="col-md-12 bottom-rule top-10"></div>
						<div class="col-md-12 bottom-rule top-10"></div>
					</div><!-- end row -->
					<div class="row">
						<div class="col-md-5 product-qty">
							  <button class="btn btn-lg btn-brand btn-full-width">
							  Add to Cart 
							  </button>
						</div><!-- end row -->
						 </form>
					</div>
			</div>
	</div>
	
	<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active">
				<a href="#description" aria-controls="description" role="tab" data-toggle="tab" >Description</a>
			</li>
			<li role="presentation"> <a href="#reviews"  aria-controls="reviews"  role="tab"  data-toggle="tab" >Reviews</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			 <div role="tabpanel" class="tab-pane active" id="description">
					 <p class="top-10" style="color:black">
						<?php echo $row["description"]; ?>
					 </p>
			 </div>
		 
			 <div role="tabpanel" class="tab-pane" id="reviews">
			 
			 <?php $sql="select * from tbl_review where pid=$pid"; 
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{ ?>
				
				<br><i class="fa fa-user-circle" style="font-size:30px;color:red"></i>
			<?php	echo $row['username']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?>
				
				<table border="2" bgcolor="pink">
				<?php echo $row['review'];
				?></table>
				<?php
			}
		}
		?>		 
			 <form method="Post" action="review_db.php?pid=<?php echo  $pid;?>">
			 <h2>Review</h2>
			  <div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Comment</label>
						<textarea name="message" class="form-control" placeholder="Enter Message" required> </textarea>
					</div>
					<div class="contact-form">
						<input type="submit" name="submit" value="Submit">
					</div>

			 </div></form>
		</div>
	</div>
	<?php 
			}
		}
		else
			{
				echo "0 results";
			} ?><br>

	
	
	<?php include('footer.php');?>
</body>

</html>
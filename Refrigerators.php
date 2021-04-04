<?php 
session_start();
include_once('connection.php');
    require 'check_if_added.php';

// User is already logged in. Redirect them somewhere useful.
if (isset($_SESSION['user_id']))
{
	$id = $_SESSION['user_id'];
}

else
{
	$id = "";
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


<div class="container">    
  <div class="row">
	<?php 
		 $sql="select * from tbl_product where category='Refrigerators'"; 
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$id=$row["id"];
					?>
					<div class="col-sm-4"> 
					  <div class="panel panel-danger">
						<div class="panel-heading"><br>
						<img src="admin/uploads/<?php echo $row['photo']; ?>"class="img" height="400" width="300" alt="Image">
							
						</div>
						<div class="panel-body">
							<?php echo $row["name"]; ?>
						</div>
						<div class="panel-footer">
							<b>Price:  </b> <strike><?php echo $row['selling'];?></strike><br>
							<b>Discount:  </b><?php echo $row['discount'].'%';?><br>
							<b>After Discount Price:  </b><?php echo $row['after_discount'];?><br>
							<?php //echo "Details : ".$row['description']?><br>
							

							<?php 
							if(!isset($_SESSION['user_id']))
							{  ?>
                                      <p><a href="index.php?id=<?php echo $id; ?>"role="button" class="btn btn-primary btn-block">Buy Now<br><small>You Must Login First </small></a></p>
                                        <?php
										
                              }
                                        else{
												if(check_if_added_to_cart($row["id"]))
												{
													echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
												}
												else
												{
													?>
													<p><a href="product_info.php?pid=<?php Echo $row["id"];?>" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
													<?php
												}
                                        }
                                        ?>
							<br>
						</div>
					  </div>
					</div>
					<?php 
			}
		}
		else
			{
				echo "0 results";
			} ?><br>
</div>
</div>
<br><br>

	<?php
include('footer.php');
?>
<script src="js/jquery-1.10.2.js"></script>   
		<script src="js/bootstrap.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>

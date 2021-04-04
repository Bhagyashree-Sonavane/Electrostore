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
		<script Language="Javascript" >function printit()
		{
			if (window.print)
			{
				window.print() ;
			}
			
			else 
			{
				var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
				document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
				WebBrowser1.ExecWB(6, 2);//Use a 1 vs. a 2 for a prompting dialog box    WebBrowser1.outerHTML = "";
			}
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

if(isset($userid))
{
		$sql="SELECT * FROM tbl_user where id=$userid";							
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result))
			{
				while($row=mysqli_fetch_array($result))
				{		$name=$row['fname'];
						$lname=$row['lname'];
						$email=$row['email'];
				}	
			}
}
else
			{
				echo" Error:".$con->error;
			}
			 $date=date('d/m/Y');
			 
$sql="SELECT * FROM tbl_shipping where uid=$userid";
			//echo $sql;
			$result = mysqli_query($con,$sql); 
			
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array( $result )) 
				{
					$ship_name=$row['ship_name'];
					$landmark=$row['landmark'];
					$city=$row['city'];
					$mobile_no=$row['mobile_no'];
				}
			}
			else
			{
				echo" Error shipping:".$con->error;
			}
?>
													
<style type="text/css">
        body {      
            font-family: Verdana;
			
        }
         
        div.invoice {
        border:1px solid #ccc;
        padding:10px;
        height:600pt;
        width:570pt;
		background-color:#e6ffff;
			 
        }
 
        div.company-address {
            border:1px solid #ccc;
            float:left;
            width:200pt;
        }
         
        div.invoice-details {
            border:1px solid #ccc;
            float:right;
            width:200pt;
        }
         
        div.customer-address {
            border:1px solid #ccc;
            float:right;
            margin-bottom:50px;
            margin-top:100px;
            width:200pt;
        }
         
        div.clear-fix {
            clear:both;
            float:none;
        }
         
        table {
            width:100%;
        }
         
        th {
            text-align: left;
        }
         
        td {
        }
         
        .text-left {
            text-align:left;
        }
         
        .text-center {
            text-align:center;
        }
         
        .text-right {
            text-align:right;
        }
         
        </style><br><br>
<div class="container" align="center">

    <div class="invoice">
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Invoice</span>
			</h3>
	<div class="company-address"> Electro_Store
            <br>1620 jai kunj niwas ,Satara  
     </div>
     <div class="invoice-details">Invoice N°: <?php echo rand(); ?>            
	<br />Date : <?php echo $date; ?>     
        </div>
         
        <div class="customer-address">
 To:		
	 <br />
           <?php echo $ship_name; ?>
            <br />
           <?php echo $landmark.','.$city; ?>
		 <br />
		   <?php echo $city;?>
            Maharashtra, India	<br />
		 Mobile no :<?php	echo $mobile_no; ?>
        </div>
		
 <div class="clear-fix"></div>
            <table border='1' cellspacing='0'>

          		<div class="box mb0" id="cart">
		<h3 align="center"><b>Order Confirm Receipt</b></h3>
			<div class="box-content-1">
				<div class="box-product-1" >
	<?php			
		$user_products_query ="select * from tbl_order where user_id=$userid  "; 	
		$user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
		$no_of_user_products= mysqli_num_rows($user_products_result);
		if($no_of_user_products==0)
		{
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
		}
		else{ }
		$src = "admin/uploads/";
		

$sql = "SELECT COUNT(*) FROM tbl_order WHERE uid = $userid and date=$date";
						$query = mysqli_query($con,$sql);
						//$row = mysqli_fetch_row($query);
							
							echo '<center>';
							echo '<table align="center" border="1" cellspacing="3" cellpadding="1" width="90%">
									<tr align="center"><th align="center" bgcolor="e6e6e6">#</th>
									<th align="center" bgcolor="e6e6e6">Order Id</th>
									<th align="center" bgcolor="e6e6e6">Product Name</th>
									<th align="center" bgcolor="e6e6e6">Image</th>
									<th align="center" bgcolor="e6e6e6">Price</th>
									<th align="center" bgcolor="e6e6e6">Quantity</th>
									<th align="center" bgcolor="e6e6e6">Amount(Rs)</th>
									
									</tr>';
									$s=0;
									$amount=0;
									$deliver=300;
									$srno=0;		
							if($user_products_result->num_rows>0)
							{					
								while($row = $user_products_result->fetch_assoc())
								{
									$srno=$srno+1;
									$oid = $row["order_id"];
									$pname = $row["product_name"];
									$img = $row["img"];
									$price = $row['price'];
									$qty = $row['qty'];
									
									
									$amount=($price*$qty);
									$tamt=$amount+300.00;
									$tamt = round($tamt);
									if (round($tamt*10) == $tamt*10 && round($tamt)!=$tamt) $tamt = "$tamt"."0";
									{
										if (round($tamt) == $tamt) 
										{
											$tamt  = "$tamt".".00";
										}
									}?>
							<tr align="center">
								<td><?php echo $srno; ?></td>
								<td><?php echo $oid;?></td>
								<td><?php echo $pname;?></td>
								<td><img src="admin/uploads/<?php echo $row['img']; ?>" alt="No Img" height="60" width="50"></td>
								<td>Rs.<?php echo $price; ?>.00/-</td>
								<td><?php echo $qty; ?></td>
								<td>Rs.<?php echo $amount; ?>.00/-</td>
								
							</tr>
								<?php
								$s+=$amount;
								$final=$s+$deliver;
								}
							}
								
							echo "</table></center><br /> ";	
					?>
						<table border="1" align="center" width="300px">
						
						<tr align="center">
							<td width="150px"><b>Total Product Items</b></td><td width="150px"><?php echo $srno;?></td>
						</tr>
						
						
						<tr align="center">
							<td><b>Delivery Cost</b></td><td> Rs.<?php echo $deliver; ?>.00/-</td>
						</tr>
						
						<tr align="center">
							<td><b>Total Amount</b></td><td>Rs.<?php echo $final;?>/-</td>
						</tr>
					</table>
            
            </table>
			<table>
					<tr>
						<b><p  align="center">This is served as your official receipt</p>
					</tr>
					<tr>
						<p  align="center">THANK YOU FOR CHOSING THE Electro_Store</p></b>
					</tr>
			</table>
			</div>
			<br><br>
		
		<script Language="Javascript">
			var NS = (navigator.appName == "Netscape");
			var VERSION = parseInt(navigator.appVersion);
			
			if (VERSION > 3)
			{
				document.write('<form align="center"> <input type=button value="Print this Page" name="Print" onClick="printit()"> </form>');
			}
		</script>
		
	
	
		<script Language="Javascript" >function printit()
		{
			if (window.print)
			{
				window.print() ;
			}
			
			else 
			{
				var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
				document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
				WebBrowser1.ExecWB(6, 2);//Use a 1 vs. a 2 for a prompting dialog box    WebBrowser1.outerHTML = "";
			}
		}
		</script>

						
         </div>     
			
		 
        </div>

            
            <br><br>
   
<?php include("footer.php");  ?>
</body>

</html>
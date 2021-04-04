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
				<span>C</span>heckout Details
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
							</tr>
						<?php  
	$i++;
			}?>
			<tr>
									<td colspan="6"><h3> Delivery Cost</h3></td>
									<td colspan="2"><?php echo $delivery;?></td>
								</tr>
					<tr>	<td colspan="6"><h1> Grand Total</h1></td>
						<td colspan="2"><?php echo $totalamount;?> </td>
					</tr>
<?php	}?>					
						
	</tbody>
					</table>
					<script>
			function onlyAlphabets(e,t)
		  {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e)
					{
                    var charCode = e.which;
                }
                else { document.getElementById('name').innerHTML="";return true;}
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||(charCode ==32))
				{
					
					    document.getElementById('name').innerHTML="";
					   return true;
					 						 
				}
                else
					document.getElementById('name').innerHTML="This is required only Alphabets!!";
					return false;
					
            }
            catch (err) {
                alert(err.Description);
            }
        }

		function onLeave()
		{
			var input = document.getElementById("name");  
          var string = input.value; 
          input.value = string.charAt(0).toUpperCase() + 
           string.slice(1); 
		}
		
		function isNumberKey1(evt)
        {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {    
			document.getElementById('phone').innerHTML="This is required only numbers!!";
			return false;
		 }
		 document.getElementById('phone').innerHTML=" ";
		   return true;
      }
     
		function myfun()
        {
            var textBox = document.getElementById("number");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<10)
                {
                    document.getElementById('phone').innerHTML='Please entered 10 numbers';
                }
                else
                {
                    document.getElementById('phone').innerHTML = '';
                }
        }
     
</script>
				<!---------------------------shipping Address ------------------------------------------>
			<div class="container">
					<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm- mb-3">Shipping Address</h4>
					<form action="processcheckout.php" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
									<div class="form-group">
										<label for="text"><b>Enter Name:</b><sup style="font-size:16px;color:red">*</sup></label>
										<input type="text" name="name" id="name" placeholder="Enter Name" class="form-control"autofocus onkeypress="return onlyAlphabets(event,this);" required autofocus onblur="onLeave()">
										<p id="name" align="center" style="color:red;"></p>
									</div>
									<div class="form-group">
									<label for="text"><b>Mobile:</b><sup style="font-size:16px;color:red">*</sup></label>
									<input type="text" name="number" id="number"  data-max=10 oninput="myfunction(this)"class="form-control"autofocus pattern="\d{10}" minlength="10" maxlength="10"autofocus placeholder="Enter Mobile No." onchange="myfun()" onkeypress="return isNumberKey1(event)"required>
									<p id="phone" align="center" style="color:red;"></p>
								</div>
								<div class="form-group">
									<label for="text"><b>Landmark:</b><sup style="font-size:16px;color:red">*</sup></label>
										<input type="text"  placeholder="Landmark" name="landmark" required>	
										<p id="phone" align="center" style="color:red;"></p>
								</div>	
								<div class="form-group">
									<label for="text"><b>Town/City:</b><sup style="font-size:16px;color:red">*</sup></label>
									<select class="option-w3ls" name="city" required>
											<option>Satara</option>
										</select>												
								</div>	
								<label for="text"><b>Address Type</b><sup style="font-size:16px;color:red">*</sup></label>
																
										<select class="option-w3ls" name="1option" required>
											<option >Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>
										</select>										
									</div>
							</div>
				        </div>
					<h3 align="center">	<input type="submit" name="Submit"class="btn btn-primary" value="Submit"><br><br>
					</h3></form>
			    </div>
				</div>
			</div>
			</div>
			</div>
</div>
</div>			

<?php include("footer.php");  ?>
</body>

</html>
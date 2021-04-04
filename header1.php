<?Php include 'connection.php';  ?>

   <script>
function myFunction() {
  var input = document.getElementById("fname");  
          var string = input.value; 
          input.value = string.charAt(0).toUpperCase() + 
           string.slice(1);

 var input = document.getElementById("lname");  
          var string = input.value; 
          input.value = string.charAt(0).toUpperCase() + 
           string.slice(1); 		   
}

      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {    
			var input = document.getElementById("no").innerHTML='Only Number Required';
			alert('Only Number Required');
			return false;
		 }
			var input = document.getElementById("no").innerHTML='';
         return true;
      }
    
	  function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e)
					{
                    var charCode = e.which;
                }
                else { return true;}
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
				{
					var input = document.getElementById("name").innerHTML='';
                    return true;
					
				}
                else
					var input = document.getElementById("name").innerHTML='Only Alphabets Required';
                    alert('Only Alphabets Required');
					return false;
            }
            catch (err) {
                alert(err.Description);
            }
        } 
 function check()
{
    var pass1 = document.getElementById('mobile');
	var message = document.getElementById('message');
    if(mobile.value.length!=10)
	{
        message.innerHTML = "required 10 digits, match requested format!"
    }
}
</script>

<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModa333" class="text-white">
								<i class="fas fa-truck mr-2"></i>Track Order</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 7219743775
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Register </a>
						</li>
						
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	
	<!-- //shop locator (popup) -->

	<!-- modals -->
	
	
	
	
	
	<!---- Track Open -->
	
	<div class="modal fade" id="exampleModa333" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Tracking</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<center>You Must Login First!!!</center>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<!-- log in -->
	
	
	
	
	<!---- Trcak Close--->
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="log_db.php" method="post">
						<div class="form-group">
							<label class="col-form-label">Email-Id</label>
							<input type="text" class="form-control" placeholder="Enter Email-Id " name="email" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder="Enter Password " name="password" required>
						</div>
						<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing" >
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							
								<a href="forget_form.php">Forgot Password?</a>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
						
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="reg_db.php" method="post">
						<div class="form-group">
							<label class="col-form-label">First Name</label>
							<input type="text" class="form-control" placeholder="Enter First Letter Capital eg.Ram " name="fname" required onkeypress="return onlyAlphabets(event,this);" autofocus onblur="myFunction()">
						</div>
						<div class="form-group">
							<label class="col-form-label">Last Name</label>
							<input type="text" class="form-control" placeholder="Enter  First Letter Capital eg.Joshi" name="lname" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" Enter Email-Id" name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mobile No.</label>
							<input type="text" class="form-control" placeholder="Enter Mobile No" name="mobile"  maxlength="10" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" placeholder=" Enter Address" name="address" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" Enter Password" name="password" id="password1" maxlength="9" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" Enter Confirm Password" name="confirm_password" maxlength="9" id="password2" required>
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2" name="check" required>
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" name="submit" value="Register">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="admin/login.php" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid">Electro Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="search_db.php" method="get">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" name="txtsearch" aria-label="Search" required>
								<input type="submit" class="btn my-2 my-sm-0"name="btn_submit" value="Search">
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<form action="" method="post">
							<button class="btn w3view-cart" type="submit" value="" name="cart_sub">
								<i class="fas fa-cart-arrow-down">	</i>
							</button>
						</form>
						<?php
						if(isset($_POST['cart_sub']))
						{
							echo "<script>alert('You Must login First')</script>";
							//echo "<script>	window.location.href='index.php;</script>";
						}
						else
						{
							echo "<script>	window.location.href='index.php;</script>";
						}
						?>
						
						
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								All Category
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="product_television.php">Television</a>
								<a class="dropdown-item" href="product_mobile.php">Mobile</a>
								<a class="dropdown-item" href="Refrigerators.php">Refrigerators</a>
								<a class="dropdown-item" href="Camera.php">Camera</a>
								<a class="dropdown-item" href="Laptops.php">Laptops</a>
								<a class="dropdown-item" href="Headphones&Speakers.php">Headphones & Speakers</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="product_show.php">Product</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.php">About Us</a>
						</li>
						
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
						
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
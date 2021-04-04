
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
							<a href="track_db.php" data-toggle="modal" data-target="#exampleModa333" class="text-white">
								<i class="fas fa-truck mr-2"></i>Track Order</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 7219743775
							
						</li>
						<li class="text-center border-right text-white">
							<font color="red"><i class="fas fa-user mr-2"></i></font><?php echo $_SESSION['username']; ?>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-logout mr-1"></i>
							<a href="logout.php" class="text-white">Logout</a>
						</li>						
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	
	
	
	
	<!-- //top-header -->
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
					<form action="track_db.php" method="post">
						<div class="form-group">
							<label class="col-form-label">Enter Order ID</label>
							<input type="text" class="form-control" placeholder="Enter Order-Id " name="track" required>
						</div>
						
						<div class="right-w3l">
							<input type="submit" class="form-control" name="btn_track" value="Track Order">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!---- Track close -->
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
			<button class="btn w3view-cart">
					<a href="cart.php">	<i class="fas fa-cart-arrow-down">	</a></i>
			</button>
					<!---	<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="cart.php" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
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
							<a class="nav-link" href="checkout.php">Checkout</a>
						</li>
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="myaccount.php">My Account</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.php">About Us</a>
						</li>
						
						
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
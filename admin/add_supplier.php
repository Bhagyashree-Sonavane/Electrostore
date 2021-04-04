<?php include '../connection.php';   ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Electro Store</title>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
 
    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>

     
<?php include('include/header.php');?>
  <br>
  
  
  <div class="container">
			<div class="row pad-botm">
				<div class="col-md-12">
					<h4 class="header-line">Supplier\<a href="add_supplier.php">Add Supplier</a></h4>
				</div>
			</div>










<!---------form----->


<div class="container">
<form class="form-horizontal" action="add_supplier_db.php" method="post" enctype="multipart/form-data">
<br><h3 align="center"><b>Supplier Form</b></h3>

 <!--- <div class="row">
			<label class="col-md-4 control-label" for="sub_category" >Supplier ID</label>  
			<div class="col-md-4">
				<input id="Supplier_ID" name="Supplier_ID"  placeholder="Supplier ID" class="form-control input-md"  type="text" >
			</div>
  </div><br>----------->


<!-- Text input-->
  <div class="row">
			<label class="col-md-4 control-label" for="sub_category" >Supplier Name</label>  
			<div class="col-md-4">
				<input id="Supplier_Name" name="Supplier_Name"  placeholder="Supplier Name "class="form-control input-md"  type="text" >
			</div>
  </div><br>


<!-- Text input-->
<div class="row">
  <label class="col-md-4 control-label" for="Product Name">Product Name</label>  
  <div class="col-md-4">
  <input id="Product Company" name="Product_Company" placeholder="Product Name" class="form-control input-md" required="" type="text">
    
  </div>
</div><br>

<div class="row">
					  <label class="col-md-4 control-label" for="product_type">Category</label>
					  <div class="col-md-4">
						<select id="product_type" name="product_type" class="form-control">
							<option value="select">----Select----</option>
							<?php
										
						
										$sql="SELECT * FROM tbl_category";
									
										$result=mysqli_query($con,$sql);
										if(mysqli_num_rows($result)){
										while($row=mysqli_fetch_array($result))
													{		$name=$row['name'];
															
															
													?><option value="<?php echo $name;?>"><?php echo $name;?></option>
													<?php
													}	
												}
												else
												{
												echo "<script>window.location.href='add_supplier.php';</script>";
												}
										?>
							
						</select>
					  </div>
					 
					</div><br>
					 
					 <!-- Select Basic -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_subcategorie">Sub-Category</label>
					  <div class="col-md-4">
						<select id="product_subcategorie" name="product_subcategorie" class="form-control">
							
							
										
										<option value=''>---Select---</option>
										<?php
											
										$sql="SELECT * FROM tbl_subcategory";
									
										$result=mysqli_query($con,$sql);
										if(mysqli_num_rows($result)){
										while($row=mysqli_fetch_array($result))
													{		$name=$row['sub_category'];
															
															
													?><option value="<?php echo $name;?>"><?php echo $name;?></option>
													<?php
													}	
												}
												else
												{
												echo "<script>window.location.href='add_supplier.php';</script>";
												}
										?>
										
									</select>
									</td>
									</tr>

						</select>
					  </div>
					 
					</div><br>
 <div class="row">
  <label class="col-md-4 control-label" for="description">Description</label>  
  <div class="col-md-4">
  <input id="description" name="description" placeholder="Description" class="form-control input-md" required="" type="text">
    
  </div>
</div><br>
<div class="row">
  <label class="col-md-4 control-label" for="Quantity">Quantity</label>  
  <div class="col-md-4">
  <input id="Quantity" name="Quantity" placeholder="Quantity" class="form-control input-md" required="" type="number">
    
  </div>
</div><br>
<div class="row">
  <label class="col-md-4 control-label" for="Price">Price</label>  
  <div class="col-md-4">
  <input id="Price" name="Price" placeholder="Price" class="form-control input-md" required="" type="text">
    
  </div>
</div><br>




<div class="row">
  <label class="col-md-4 control-label" for="Price">Email ID</label>  
  <div class="col-md-4">
  <input id="Email_ID" name="Email_ID" placeholder="Email ID" class="form-control input-md" required="" type="text">
    
  </div>
</div><br>

<div class="row">
  <label class="col-md-4 control-label" for="Price">Mobile No</label>  
  <div class="col-md-4">
  <input id="Mobile_No" name="Mobile_No" placeholder="Mobile No"  type="number" maxlength="10" class="form-control input-md" required  >
    
  </div>
</div><br>

<div class="row">
  <label class="col-md-4 control-label" for="Price">Address</label>  
  <div class="col-md-4">
  <input id="Address" name="Address" placeholder="Address" class="form-control input-md" required="" type="text">
    
  </div>
</div><br>
<!-- Button -->
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
  </div>
</div><br>
</form>
</div>

</div>





	<!-- copyright -->
  <?php include('include/footer.php');?>
      
		<script src="assets/js/jquery-1.10.2.js"></script>   
		<script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/custom.js"></script>
</body>
</html>
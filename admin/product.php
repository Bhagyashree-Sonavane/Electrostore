<?Php include '../connection.php';  ?>
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
					<h4 class="header-line">Product\<a href="Product.php">Add Product</a></h4>
				</div>
			</div>
		
			<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2">
			<div class="panel panel-info" >
			<div class="panel-heading"><b>Add New Product</b></div>
			<div class="panel-body">
			
			<table>
			
			<form class="form-horizontal" action="product_db.php" method="post" enctype="multipart/form-data">
			
					  <h3 align="center"><b>Add Product</b></h3>
					
					 

					<div class="row">
					  <label class="col-md-4 control-label" for="product_name">Product Name</label>  
					  <div class="col-md-6">
					  <input id="product_name" name="product_name" placeholder="Product Name" class="form-control input-md" type="text" required>
						
					  </div>
					</div><br>

					<!-- Select Basic -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_type">Category</label>
					  <div class="col-md-6">
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
												echo "<script>window.location.href='product.php';</script>";
												}
										?>
							
						</select>
					  </div>
					 
					</div><br>
					 
					 <!-- Select Basic -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_subcategorie">Sub-Category</label>
					  <div class="col-md-6">
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
												echo "<script>window.location.href='product.php';</script>";
												}
										?>
										
									</select>
									</td>
									</tr>

						</select>
					  </div>
					 
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="price">Product Selling Price</label>  
					  <div class="col-md-6">
					  <input id="price" name="price" placeholder="Product Price" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="discount">Discount % </label>  
					  <div class="col-md-6">
					  <input id="discount" name="discount" placeholder="Discount" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="discount_price">After Discount Price</label>  
					  <div class="col-md-6">
					  <input id="discount_price" name="discount_price" placeholder="After Discount price" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="discount_price">Stock</label>  
					  <div class="col-md-6">
					  <input id="stock" name="stock" placeholder="Enter Stock" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Textarea -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_description">Product Description</label>
					  <div class="col-md-6">                     
						<textarea class="form-control" id="product_description" name="product_description" required></textarea>
					  </div>
					</div><br>

					<!-- Text input
					<div class="row">
					  <label class="col-md-4 control-label" for="shipping">Shipping Charges</label>  
					  <div class="col-md-6">
					  <input id="shipping" name="shipping" placeholder="Shipping Charges" class="form-control input-md" required type="number">
						
					  </div>
					</div><br> -->

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_availability">Product Availability</label>  
					  <div class="col-md-6">
					  
						<select id="product_availability" name="product_availability" class="form-control input-md"required type="text">
							<option value="select">----Select----</option>
							<option value="yes">Yes</option>
							<option value="no">No</option>
						
						</select>
					  </div>
					</div><br>

					 <!-- File Button --> 
					<div class="row">
					  <label class="col-md-4 control-label" for="filebutton">Photo</label>
					  <div class="col-md-6">
						<input id="filebutton" name="userfile" class="input-file" type="file" required>
					  </div>
					</div><br>




					<!-- Button -->
					<div class="row">
					  <div class="col-md-4"></div>
					  <div class="col-md-6">
						<button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
					  </div>
					</div><br>
			</form>
			</table>
            </div>
			</div>
			</div><br><br>
			</div>
	</div>	
	
	<!-- copyright -->
  <?php include('include/footer.php');?>
      
		<script src="assets/js/jquery-1.10.2.js"></script>   
		<script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/custom.js"></script>
</body>
</html>
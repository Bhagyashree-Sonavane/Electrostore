<?php include '../connection.php';  ?>
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
      <!------MENU SECTION START-->
<?php include('include/header.php');?>
<!-- MENU SECTION END-->
   
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Product\<a href="edit_product.php">Edit Product</a></h4>
            </div>
		</div>
		</div>
				<div class="row">
				
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">Edit Product Information</div>
					 
					<div class="panel-body">
	<form role="form" method="post" action="confirmeditprod.php" >
	<center>
											
						<?php 

			$menuid = $_GET['id'];
			
			
		$sql="SELECT * FROM tbl_product where id='$menuid'";

		
			
			$result = mysqli_query($con,$sql); 
			
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array( $result )) 
				{
					
					$name=$row['name'];
					$cat = $row['category'];
					$subcat=$row['subcategory'];
					$selling = $row['selling'];
					$discount=$row['discount'];
					$after_discount = $row['after_discount'];
					$stock= $row['stock'];
					$des = $row['description'];
					//$shipping = $row['shipping'];
					$available = $row['availability'];
					$photo = $row['photo'];
					
				
				}
			}
			else
			{
				echo" Error:".$con->error;
			}
			
  ?> 
  
					
					  <div class="row">
								<label class="col-md-4 control-label" for="product_id" >Product Id</label>  
								<div class="col-md-6">
									<input id="product_id" name="product_id"placeholder="Product id" class="form-control input-md"  type="number" value="<?php echo $menuid; ?>"readonly>
								</div>
					  </div><br>

					<div class="row">
					  <label class="col-md-4 control-label" for="product_name">Product Name</label>  
					  <div class="col-md-6">
					  <input id="product_name" name="product_name" placeholder="Product Name" class="form-control input-md" type="text" value="<?php echo $name; ?>" required>
						
					  </div>
					</div><br>

					<!-- Select Basic -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_type">Category</label>
					  <div class="col-md-6">
						<select name="product_type">
							<option value='<?php echo $cat;?>'><?php echo $cat;?></option>
							<?php
										
						
										$sql="SELECT * FROM tbl_subcategory";
									
										$result=mysqli_query($con,$sql);
										if(mysqli_num_rows($result))
										{
										while($row=mysqli_fetch_array($result))
													{		
													$name=$row['category'];	
												if($cat!=$name)
												{
													?>
												<option value="<?php echo $name;?>"><?php echo $name;?></option>
												<?php													
												}
													}													
										}
												else
												{
												echo "<script>window.location.href='manage_product.php';</script>";
												}
										?>
							
						</select>
					  </div>
					 
					</div><br>
					 
					 <!-- Select Basic -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_subcategorie">Sub-Category</label>
					  <div class="col-md-6">
						<select name="product_subcategorie" >
									<option value='<?php echo $subcat;?>'><?php echo $subcat;?></option>
										<?php
											
										$sql="SELECT * FROM tbl_subcategory ";
									
										$result=mysqli_query($con,$sql);
										if(mysqli_num_rows($result)){
										while($row=mysqli_fetch_array($result))
													{		
												$name=$row['sub_category'];
												if($subcat!=$name)
												{
													?>
												<option value="<?php echo $name;?>"><?php echo $name;?></option>
												<?php
												}
													}	
												}
												else
												{
												echo "<script>window.location.href='manage_product.php';</script>";
												}
										?>
						</select>
					  </div>
					 
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="price">Product Selling Price</label>  
					  <div class="col-md-6">
					  <input id="price" name="price" placeholder="Product Price" class="form-control input-md" required type="number" value="<?php echo $selling; ?>">
						
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="discount">Discount % </label>  
					  <div class="col-md-6">
					  <input id="discount" name="discount" value="<?php echo $discount; ?>"placeholder="Discount" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="discount_price">After Discount Price</label>  
					  <div class="col-md-6">
					  <input id="discount_price" name="discount_price" value="<?php echo $after_discount; ?>" placeholder="After Discount price" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="discount_price">Stock</label>  
					  <div class="col-md-6">
					  <input id="stock" name="stock" value="<?php echo $stock; ?>" placeholder="Enter Stock" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>



					<!-- Textarea -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_description">Product Description</label>
					  <div class="col-md-6">                     
						<input class="form-control input-md" id="product_description" value="<?php echo $des; ?>" name="product_description" required>
					  </div>
					</div><br>

					<!-- Text input-->
					<!-- <div class="row">
					  <label class="col-md-4 control-label" for="shipping">Shipping Charges</label>  
					  <div class="col-md-6">
					  <input id="shipping" name="shipping"value="<?php echo $shipping; ?>" placeholder="Shipping Charges" class="form-control input-md" required type="number">
						
					  </div>
					</div><br> -->

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_availability">Product Availability</label>  
					  <div class="col-md-6">
					  
						<select name="product_availability">
							<option value='<?php echo $available;?>'><?php echo $available;?></option>
										<?php
											
										$sql="SELECT availability FROM tbl_product";
									
										$result=mysqli_query($con,$sql);
										if(mysqli_num_rows($result)){
										while($row=mysqli_fetch_array($result))
													{		
												$name=$row['availability'];
												if($name!=$available)
												{
												?>
						<option value="<?php echo $name;?>"><?php echo $name;?></option>
						<?php	
												}
													}	
												}
												else
												{
												echo "<script>window.location.href='manage_product.php';</script>";
												}
										?>
										
									</select>
					  </div>
					</div><br>

					 <!-- File Button --> 
					<div class="row">
					  <label class="col-md-4 control-label" for="filebutton">Photo</label>
					  <div class="col-md-6">
						<input class="form-control input-md" id="photo" value="<?php echo $photo; ?>" name="photo">
					  </div>
					</div><br>

					<!-- Button -->
					<div class="row">
					  <div class="col-md-4"></div>
					  <div class="col-md-6">
						<button id="Submit" type="submit" name="Submit" class="btn btn-primary">Update</button>
					  </div>
					</div><br>
					</center>
			</form>
							
               </div>
              </div>
            </div>
        </div>
    </div>
    
     <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('include/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
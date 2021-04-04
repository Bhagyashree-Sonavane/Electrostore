<?php include '../connection.php';

			$menuid = $_GET['id'];
		
			  ?>
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
                <h4 class="header-line">supplier\<a href="edit_product.php">Edit supplier</a></h4>
            </div>
		</div>
		</div>
				<div class="row">
				
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">Edit supplier Information</div>
					 
					<div class="panel-body">
	<form role="form" method="post" action="editsupplierconfirm.php?id=<?php echo $menuid;?>" >
	<center>
											
						<?php 

			
		$sql="SELECT * FROM tbl_supplier where Supplier_ID='$menuid'";

		
			
			$result = mysqli_query($con,$sql); 
			
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array( $result )) 
				{
					
					$Supplier_Name=$row['Supplier_Name'];
					$pname = $row['pname'];
					$category_name=$row['category_name'];
					$sub=$row['sub_cat'];
					$description = $row['description'];
					$Quantity=$row['Quantity'];
					$Price = $row['Price'];
					$total=$Quantity+$Price;
					$Email_ID = $row['Email_ID'];
					$Mobile_No= $row['Mobile_No'];
					$Address = $row['Address'];
				}
			}
			else
			{
				echo" Error:".$con->error;
			}
			
  ?> 
  
					<div class="row">
			<label class="col-md-4 control-label" for="sub_category" >Supplier ID</label>  
			<div class="col-md-6">
				<input id="Supplier_ID" name="Supplier_ID"  placeholder="Supplier ID" value="<?php echo $menuid; ?>" class="form-control input-md"  type="text" required>
			</div>
  </div><br>

					<div class="row">
			<label class="col-md-4 control-label" for="sub_category" >Supplier Name</label>  
			<div class="col-md-6">
				<input id="Supplier_Name" name="Supplier_Name"  placeholder="Supplier Name " value="<?php echo $Supplier_Name; ?>"class="form-control input-md"  type="text" required>
			</div>
  </div><br>	

	<div class="row">
			<label class="col-md-4 control-label" for="sub_category" >Product Name</label>  
			<div class="col-md-6">
				<input id="Supplier_Name" name="pname"  placeholder="Product Name " value="<?php echo $pname; ?>"class="form-control input-md"  type="text" required>
			</div>
  </div><br>	  
					 <!-- Select Basic -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_subcategorie">Category</label>
					  <div class="col-md-6">
						<select  name="product_type" class="form-control">
							
							<option value='<?php echo $category_name;?>'><?php echo $category_name;?></option>
							<?php
										
						
										$sql="SELECT * FROM tbl_category";
									
										$result=mysqli_query($con,$sql);
										if(mysqli_num_rows($result))
										{
										while($row=mysqli_fetch_array($result))
													{		
														$name=$row['name'];
														if($category_name!=$name)
															{
													?>
												<option value="<?php echo $name;?>"><?php echo $name;?></option>
												<?php													
															}	
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

					<!-- Text input-->
					
					
					 <!-- Select Basic -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_subcategorie">Sub-Category</label>
					  <div class="col-md-6">
						<select  name="sub" class="form-control">
							
							<option value='<?php echo $sub;?>'><?php echo $sub;?></option>
							<?php
										
						
										$sql="SELECT * FROM tbl_subcategory ";
									
										$result=mysqli_query($con,$sql);
										if(mysqli_num_rows($result))
										{
										while($row=mysqli_fetch_array($result))
													{		
														$name=$row['sub_category'];
														if($sub!=$name)
															{
													?>
												<option value="<?php echo $name;?>"><?php echo $name;?></option>
												<?php													
															}	
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

					<!-- Text input-->
					
					
					<div class="row">
  <label class="col-md-4 control-label" for="description">Description</label>  
  <div class="col-md-6">
  <input id="description" name="description" placeholder="Description" class="form-control input-md" value="<?php echo $description; ?>"required type="text">
    
  </div>
</div><br>
<div class="row">
  <label class="col-md-4 control-label" for="Quantity">Quantity</label>  
  <div class="col-md-6">
  <input id="Quantity" name="Quantity" placeholder="Quantity" class="form-control input-md"value="<?php echo $Quantity; ?>" required type="number">
    
  </div>
</div><br>
<div class="row">
  <label class="col-md-4 control-label" for="Price">Price</label>  
  <div class="col-md-6">
  <input id="Price" name="Price" placeholder="Price" class="form-control input-md" value="<?php echo $Price; ?>"required type="text">
    
  </div>
</div><br>




<div class="row">
  <label class="col-md-4 control-label" for="Price">Email ID</label>  
  <div class="col-md-6">
  <input id="Email_ID" name="Email_ID" placeholder="Email ID" class="form-control input-md"value="<?php echo $Email_ID; ?>" required type="text">
    
  </div>
</div><br>



<div class="row">
  <label class="col-md-4 control-label" for="Price">Mobile No</label>  
  <div class="col-md-6">
  <input id="Mobile_No" name="Mobile_No" placeholder="Mobile No" class="form-control input-md" value="<?php echo $Mobile_No; ?>"required type="text">
    
  </div>
</div><br>

<div class="row">
  <label class="col-md-4 control-label" for="Price">Address</label>  
  <div class="col-md-6">
  <input id="Address" name="Address" placeholder="Address" class="form-control input-md"value="<?php echo $Address; ?>" required type="text">
    
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
</html>-
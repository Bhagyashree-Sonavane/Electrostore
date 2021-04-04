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
					<h4 class="header-line">Sub-Category\<a href="sub_category.php">Add sub-category</a></h4>
				</div>
			</div>
		
			<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
			<div class="panel panel-info" >
			<div class="panel-heading"><b>Add New Sub-Category</b></div>
			<div class="panel-body">
			
			<table>
			<form class="form-horizontal" action="add_subcategory_db.php" method="post" enctype="multipart/form-data">
			<h3 align="center"><b>Sub-Category</b></h3>

			<!-- Select Basic -->
			<div class="row">
			  <label class="col-md-4 control-label" for="category_name">Category Name</label>
			  <div class="col-md-4">
				<select id="category_name" name="category_name" class="form-control">
					<option value="select">----Select----</option>
					<?php
						include '../connection.php';
						
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
								echo "<script>window.location.href='add_category.php';</script>";
								}
					?>
						</select>
					  </div>
					 
					</div><br>
					<!-- Text input-->
					  <div class="row">
								<label class="col-md-4 control-label" for="sub_category" >Sub Category Name</label>  
								<div class="col-md-4">
									<input id="sub_category" name="sub_category"  placeholder="Sub - Category "class="form-control input-md"  type="text" >
								</div>
					  </div><br>


					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="description">Description</label>  
					  <div class="col-md-4">
					  <input id="description" name="description" placeholder="Description" class="form-control input-md" required="" type="text">
						
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
		
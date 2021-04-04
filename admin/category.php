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
					<h4 class="header-line">Category\<a href="category.php">Add category</a></h4>
				</div>
			</div>
		
			<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
			<div class="panel panel-info" >
			<div class="panel-heading"><b>Add New Category</b></div>
			<div class="panel-body">
			
			<table>
			
			<form class="form-horizontal" action="add_category_db.php" method="post" enctype="multipart/form-data">
			
					<h3 align="center"><b>Category</b></h3>
					  <div class="row">
								<label class="col-md-4 control-label" for="sub_category" >Category Name</label>  
								<div class="col-md-4">
									<input id="category" name="category"  placeholder="Category Name "class="form-control input-md"  type="text" >
								</div>
					  </div><br>

					<div class="row">
					  <label class="col-md-4 control-label" for="description">Description</label>  
					  <div class="col-md-4">
					  <input id="description" name="description" placeholder="Description" class="form-control input-md" required="" type="text">
						
					  </div>
					</div><br>

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
<?php


include('../connection.php');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Edit Categories</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
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
                <h4 class="header-line">Category\<a href="edit_category.php">Edit category</a></h4>
                
                            </div>

				</div>
				</div>
				<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">Edit Category Information</div>
					 
					<div class="panel-body">
					<form role="form" method="post" action="confirmeditcategory.php"><center>
					<table>
<?php 
	
			$menuid = $_GET['id'];
			
			//echo $_GET['id']; 
			
			$sql="SELECT * FROM tbl_category where id = '$menuid' ";
			
			$result = mysqli_query($con,$sql); 
			
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array( $result )) 
				{
					$id = $row['id'];
					$name = $row['name'];
					$description=$row['description'];
				
				}
			}
			else
			{
				echo" Error:".$con->error;
			}
			
	
	

  ?> 
  
		
		<div class="row">
								<label class="col-md-4 control-label" for="category" >Category Id</label>  
								<div class="col-md-4">
										<input name="catid" type="text" id="catid" value="<?php echo $menuid; ?>">
								</div>
		</div><br>
		<div class="row">
								<label class="col-md-4 control-label" for="category" >Category Name</label>  
								<div class="col-md-4">
										<input name="catname" type="text" id="t1" value="<?php echo $name; ?>"required>
								</div>
		</div><br>
		<div class="row">
								<label class="col-md-4 control-label" for="category" >Description</label>  
								<div class="col-md-4">
										<textarea name="des" cols="20" rows="5" required><?php echo $description; ?></textarea>
								</div>
		</div><br>
		<div class="row">
					  <div class="col-md-4"></div>
					  <div class="col-md-4">
						<button id="Submit" name="Submit" class="btn btn-primary">Update</button>
					  </div>
					</div><br>
					</form>
			</table>
            </div>
			</div>
			</div><br><br>
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
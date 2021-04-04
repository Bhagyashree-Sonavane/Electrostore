<?php include'../connection.php'; ?>
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
					<h4 class="header-line">supplier\<a href="manage_supplier.php">Manage supplier</a></h4>
				</div>
			</div>
			<div class="panel panel-info">
					<div class="panel-heading">List Of supplier</div>
			
						<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead  align="center">
                                        <tr>
                                          
											<th>Supplier ID</th>
                                            <th>Supplier Name</th>
											<th>Product Name</th>
											<th>Category Name </th>
											<th>Sub Category Name </th>
											<th>description</th>
											<th>Price</th>
											<th>Quanity</th>
											<th>Total</th>
                                            <th>Email_ID</th>
											<th>Mobile_No</th>
											<th>Address</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									
									
									
									<?php
     
     $sql="select * from tbl_supplier";
        $result = mysqli_query($con,$sql); 
          
	if(mysqli_num_rows($result)>0)
	{       
        while($row = mysqli_fetch_array( $result )) {	?>

  		
			<tr class="odd gradeX">
                
                           <td class="center" align="center">s<?php echo $row['Supplier_ID'];?></td>
                           <td class="center"><?php echo $row['Supplier_Name'];?></td>               
                            <td class="center"><?php echo $row['pname'];?></td>
                           <td class="center"><?php echo $row['category_name'];?></td>
						    <td class="center"><?php echo $row['sub_cat'];?></td>
						   <td class="center"><?php echo $row['description'];?></td> 
						   <td class="center"><?php echo $row['Price'];?></td>
						   <td class="center"><?php echo $row['Quantity'];?></td>
						   <td class="center"><?php echo $row['Total'];?></td>
						   <td class="center"><?php echo $row['Email_ID'];?></td>
						   <td class="center"><?php echo $row['Mobile_No'];?></td>
						   <td class="center"><?php echo $row['Address'];?></td>
						  
						 
						<td class="center" align="center">
							 <a href="editsupplier.php?id=<?php echo $row['Supplier_ID'];?>">
								<button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a> 
							 <a href="deletesupplier.php?id=<?php echo $row['Supplier_ID'];?>"> 
							 <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button></a>
                        </td>
            </tr>
										<?php }} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

		

</div>
    
    

<br>
<br>
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
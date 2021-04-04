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
					<h4 class="header-line">Feedback\<a href="manage_feedback.php">Manage Feedback</a></h4>
				</div>
			</div>
		
				<div class="panel panel-info">
					<div class="panel-heading">List of Visitors Feedback</div>

						<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead  align="center">
                                        <tr>
                                            
											<th>Feedback Id</th>
                                            <th>Visitor Name</th>
											 <th>Email</th>
											 <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

	<?php
     
      
		$sql="select * from tbl_contact";
        $result = mysqli_query($con,$sql); 
            
	if(mysqli_num_rows($result)>0)
	{       
        while($row = mysqli_fetch_array( $result )) {	?>
			<tr class="odd gradeX">
                    
                          <td class="center">f<?php echo $row['id'];?></td>
						   <td class="center"><?php echo $row['name'];?></td>
                          	<td class="center"><?php echo $row['email'];?></td>                                         
							 <td class="center"><?php echo $row['message'];?></td>
                        
						<td class="center" >
                         <a href="deletefeedback.php?id=<?php echo$row['id'];?>">  
						 <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
                        </td>
                                        </tr>
										<?php }}else
												{
													echo" No any Feedback"; 
													}?>                                      
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
							
<?php

?>
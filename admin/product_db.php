<html>
<body>  
  <?php

     include ('../connection.php'); 
        if(isset($_POST['Submit']))
        {
			//$date=date('d/m/y');
          //  $pid =  mysqli_real_escape_string($con,$_POST['product_id']);
            $pname =  mysqli_real_escape_string($con, $_POST['product_name']);
			$ptype =   mysqli_real_escape_string($con,$_POST['product_type']);
			$psubcategory =  mysqli_real_escape_string($con, $_POST['product_subcategorie']);
			$price =   mysqli_real_escape_string($con,$_POST['price']);
			$discount =  mysqli_real_escape_string($con, $_POST['discount']);
			$discount_price =  mysqli_real_escape_string($con,$_POST['discount_price']);
$stock =  mysqli_real_escape_string($con,$_POST['stock']);			
            $description = mysqli_real_escape_string($con,$_POST['product_description']);
			//$shipping = mysqli_real_escape_string($con,$_POST['shipping']);
			$product_availability= mysqli_real_escape_string($con,$_POST['product_availability']);
			
            $target_file='uploads/';
			
            $imagetmp=basename($_FILES['userfile']['name']);
			$location1 = $target_file.$_FILES['userfile']['name']; 
           
		   
		   if(empty($pname)||empty($stock)||empty($ptype)||empty($psubcategory)||empty($price)||empty($discount)||empty($discount_price)||empty($description)||empty($product_availability))
		{
			echo "<script> alert('Please Fill all fields..!')</script>";
				echo "<script>window.location.href='product.php'</script>";
				
		}
          if($imagetmp=="")   
          {
              $image_name="No image";
          }   
          else
          {
       
               $image_name= $imagetmp;
          }
  
       
       move_uploaded_file($_FILES['userfile']['tmp_name'], $location1);
       
           
               $sql = "INSERT INTO tbl_product(id,name,category,subcategory,selling,discount,after_discount,stock,description,availability,photo) VALUES ('','$pname','$ptype','$psubcategory','$price','$discount','$discount_price','$stock','$description',$product_availability','$image_name')";
				if(mysqli_query($con, $sql))
					{
							
					echo'<script>alert("Added")</script>';
					echo "<script>window.location.href='product.php';</script>";
				 }
				else
				{
						
						    echo "Error: " . $sql . "<br>" . $con->error;	
				}
				//header ('Location:product.php');
				
                mysqli_close($con);
        }
    ?>

</body>
</html>
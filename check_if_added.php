
<?php
    
    function check_if_added_to_cart($item_id){
		
       //session_start();    
        require 'connection.php';
        $user_id=$_SESSION['user_id'];
		$date=date("d/m/Y");
        $product_check_query="select * from tbl_cart where product_id='$item_id' and user_id='$user_id' and date='$date' ";
        $product_check_result=mysqli_query($con,$product_check_query) or die(mysqli_error($con));
        $num_rows=mysqli_num_rows($product_check_result);
        if($num_rows >=1){return 1;
			echo "<script>alert('Product add into Cart')</script>";}
        return 0;
    }
?>
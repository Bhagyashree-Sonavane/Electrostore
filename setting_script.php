<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['user_id']))
	{
        header('location:index.php');
    }  
    $old_password= mysqli_real_escape_string($con,$_POST['oldPassword']);
    $new_password= mysqli_real_escape_string($con,$_POST['newPassword']);
    $id=$_SESSION['user_id'];
    //echo $email;
    $password_from_database_query="select password from tbl_user where id='$id'";
    $password_from_database_result=mysqli_query($con,$password_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($password_from_database_result);
    //echo $row['password'];
    if($row['password']==$old_password)
	{
        $update_password_query="update tbl_user set password='$new_password' where id='$id'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
      //  echo "Your password has been updated.";
		?> <script>
            window.alert("Your password has been updated");
        </script>
       
        <meta http-equiv="refresh" content="3;url=myaccount.php" />
        <?php
    }else{
        ?>
        <script>
            window.alert("Wrong password!!");
        </script>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
        //header('location:settings.php');
    }
?>
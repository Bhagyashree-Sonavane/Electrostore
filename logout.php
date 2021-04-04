 <?php
 session_start();
	//echo  $_SESSION['user_id']; 
  session_unset();
    session_destroy();
//echo  "session=".$_SESSION['user_id']; 
echo "<script>window.location.href='index.php';</script>";	
 // header('location: index.php');
  ?>
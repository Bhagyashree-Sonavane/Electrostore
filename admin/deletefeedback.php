<?php
	
	include('../connection.php');
	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{
		$id = $_GET['id'];
		if($id=="")
		{
		?>
        <script language="javascript">
 
 			alert('Nothing Selected.');
 
 		</script>
        <?php
		exit;
	}
	else
	{
?>
 
 <script language="javascript">
 
 var delmsg = confirm("Do you confirm to delete Feedback of users <?php echo $id; ?>?"); 
 
 	if(delmsg==true)
 	{
		alert('Feedback Deletion Confirmed');
		
		location.href='delconfirm.php?type=feed&id=<?php echo $id; ?>';	
	}
 	else
 	{
		alert('Feedback Deletion Cancelled');
		location.href='manage_feedback.php';
		
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href='manage_feedback.php';</script>

<?php
 }
 
?>




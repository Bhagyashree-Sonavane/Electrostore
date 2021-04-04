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


<body <?php include('include/header.php');?>>
	<!---<center><img src="../logo2.png" alt=" " class="img-fluid"><br>
			</center>			-->
	<h3 align="center">Report of All Users</h3><hr>
		<table border="2" align="center">
			<tr align="center">
				<th>&nbsp;&nbsp;id&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Name&nbsp;&nbsp;</th>
				
				<th>&nbsp;&nbsp;email&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;mobile&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;address&nbsp;&nbsp;</th>
				
				<th>&nbsp;&nbsp;date&nbsp;&nbsp;</th>
				
			</tr>
			<?php 
	 
								$sql="select * from tbl_user"; 
								$result=$con->query($sql);
								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc()) 
									{
					?>
			<tr align="center"> 
				<td>&nbsp;&nbsp;<?php echo $row['id']; ?>&nbsp;&nbsp;</td>
				<td>&nbsp;&nbsp;<?php echo $row['fname']."&nbsp;".$row['lname']; ?>&nbsp;&nbsp;</td>
				
				<td>&nbsp;&nbsp;<?php echo $row['email']; ?>&nbsp;&nbsp;</td>
				<td>&nbsp;&nbsp;<?php echo $row['mobile']; ?>&nbsp;&nbsp;</td>
				<td>&nbsp;&nbsp;<?php echo $row['address']; ?>&nbsp;&nbsp;</td>
				<td>&nbsp;&nbsp;<?php echo $row['date']; ?>&nbsp;&nbsp;</td>
				
			</tr>
			<?php	}}else{ echo "0 results";	
										}?>
		</table><br><br><br>
		<script Language="Javascript">
		function printit()
		{
			if (window.print)
			{
				window.print() ;
			}
			
			else 
			{
				var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
				document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
				WebBrowser1.ExecWB(6, 2);//Use a 1 vs. a 2 for a prompting dialog box    WebBrowser1.outerHTML = "";
			}
		}
		</script>
		<h3 align="center"><input type="button" value="Print" name="Print" onClick="printit()"> </h1><br>

	</div>
	<center>
	<?php include('include/footer.php');?>
	</center>
		<script src="assets/js/jquery-1.10.2.js"></script>   
		<script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/custom.js"></script>
</body>

</html>
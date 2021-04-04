<?php
session_start();
$_SESSION["userId"] = "1";
 include '../connection.php';

if (count($_POST) > 0) {
    $result = mysqli_query($con, "SELECT *from tbl_admin WHERE id='" . $_SESSION["userId"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($con, "UPDATE tbl_admin set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["userId"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>

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
					<h4 class="header-line">Admin\<a href="change_password.php">Change Password</a></h4>
				</div>
			</div>
    <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
	<center>
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0" height="200"  width="500" align="center" class="tblSaveForm">
               
			   <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
			 
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password" placeholder="Enter current password" name="currentPassword" class="txtField" /><span  id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password"placeholder="Enter New  password" name="newPassword" class="txtField" /><span id="newPassword"class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" placeholder="Enter confirm password"name="confirmPassword" class="txtField" /><span id="confirmPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"  value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>	
		</center>
    </form>
	</div>
	

	<!-- copyright -->
  <?php include('include/footer.php');?>
      
		<script src="assets/js/jquery-1.10.2.js"></script>   
		<script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/custom.js"></script>
</body>
</html>
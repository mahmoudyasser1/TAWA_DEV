<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
function noBack(){window.history.forward();}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack();}
window.onunload=function(){void(0);}
</script>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
session_start();
$_SESSION['message'] = '';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tawa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql1 = "SELECT Username,Password FROM user ";
$result1 = $conn->query($sql1);
$sql2 = "SELECT Username,Password FROM admin ";
$result2 = $conn->query($sql2);
if (isset($_SESSION['user']))
{
	session_destroy();
	header("Location:login.php");
	
}
else
{
	if(isset($_POST["login"])){  
$_SESSION['user']=  $_POST['username'];  

   while($row1=mysqli_fetch_assoc($result1)) {
        $username1 = $row1['Username'];
		$password1 = $row1['Password'];
      if(($username1 == $_POST['username'] )&&($password1 == $_POST['pass'])){
	  
       header('Location:../Home Page/Home View.php');
	   $_SESSION['logged']=true;
      } else{
		  $_SESSION['message'] = "invalid username or password";
	  }
	 
   }
      while($row2=mysqli_fetch_assoc($result2)) {
        $username2 = $row2['Username'];
		$password2 = $row2['Password'];
      if(($username2 == $_POST['username'] )&&($password2 ==$_POST['pass'])){
	  
       header('Location:../Asmaa/admin.php');
      } else{
		  $_SESSION['message'] = "invalid username or password";
	  }	
   }
     //$_SESSION['message'] = "invalid username or password";
    
}
}


?>

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form"action="login.php"method="post">
					<span class="login100-form-logo">
						 <i source="logo.jpg"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="alert alert-error"><?= $_SESSION['message'] ?></div>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

				

					<div class="container-login100-form-btn">
						<button class="login100-form-btn"type="submit"name="login">
							Login
						</button>
					</div>


					<div class="text-center p-t-90">
						<a class="txt1" href="registration.php">
							go to sign-up page
						</a>
					</div>
					
	
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

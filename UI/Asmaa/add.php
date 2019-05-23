<?php
session_start();
$_SESSION['errormessage'] = '';
$_SESSION['successmessage'] = '';

$mysqli = new mysqli('localhost', 'root', '', 'tawa');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//two passwords are equal to each other
	if($_POST['password'] == $_POST['cpassword'])
	{
		$username = $mysqli->real_escape_string($_POST['uname']);
		$fullname = $mysqli->real_escape_string($_POST['name']);
		$email = $mysqli->real_escape_string($_POST['email']);
		$password = $_POST['password'];
		$phone = $mysqli->real_escape_string($_POST['phone']);
		$confirmPassword = $_POST['cpassword'];
		
		$sql = "INSERT INTO `user`(`Username`, `Password`, `FullName`, `Phone`, `Email`, `confirmpassword`) VALUES ('$username','$password','$fullname','$phone','$email','$confirmPassword')";
		
		if($mysqli->query($sql) === true)
		{
			$_SESSION['successmessage'] = "Congratulations! A new user has been created successfully";
			//header("location: admin.php");
		}
		else
		{
			$_SESSION['errormessage'] = "The data entered were invalid, Please re-enter your data";
		}
	}
	else
	{
		$_SESSION['errormessage'] = "The Password Not Matched";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add User</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/style.css" rel="stylesheet" media="all">
    <style type="text/css">
          body {
   background-image: url("img/bg-img/editor-2.jpg");
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: 100%100%;
  
}
    </style>
</head>

<body>
    
            <div class="card card-3" style="background-color: #000000ab;">
                <div class="card-heading"> </div>
                <div class="card-body" style="margin-left: 50px;">                      
                     <form method="POST">
					 <div class="alert alert-error"><?= $_SESSION['errormessage'] ?></div>
					 <div class="alert alert-success"><?= $_SESSION['successmessage'] ?></div>
					<div class="form-row p-t-20">
                            
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Full Name" name="name" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="User Name" name="uname" required>
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" required>
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="cpassword" required>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="button" style=" background-color: red;" onclick="window.location.href='admin.php'">Cancel</button>
                            <button class="btn btn--pill btn--green" type="submit" style="float: right;" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
 

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
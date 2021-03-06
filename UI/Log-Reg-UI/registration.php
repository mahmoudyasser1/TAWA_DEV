<?php
session_start();
$_SESSION['message'] = '';

$mysqli = new mysqli('localhost', 'root', '', 'tawa');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//two passwords are equal to each other
	if($_POST['password'] == $_POST['cpassword'])
	{
		$userType = $_POST['exist'];
		$username = $mysqli->real_escape_string($_POST['uname']);
		$fullname = $mysqli->real_escape_string($_POST['name']);
		$email = $mysqli->real_escape_string($_POST['email']);
		$password = $_POST['password'];
		$phone = $mysqli->real_escape_string($_POST['phone']);
		$confirmPassword = $_POST['cpassword'];
		//echo $userType;

		if($userType == "User")
		{
			$sql = "INSERT INTO `user`(`Username`, `Password`, `FullName`, `Phone`, `Email`, `confirmpassword`) VALUES ('$username','$password','$fullname','$phone','$email','$confirmPassword')";
		}
		else if($userType == "Admin")
		{
			$sql = "INSERT INTO `admin`(`Username`, `Password`, `FullName`, `Phone`, `Email`, `confirmpassword`) VALUES ('$username','$password','$fullname','$phone','$email','$confirmPassword')";
		}
		else
		{
			$_SESSION['message'] = "Choose The User Type";
		}
		if($mysqli->query($sql) === true)
		{
			$_SESSION['message'] = "Congratulations! A new account has been created successfully";
			header("location: login.php");
		}
		else
		{
			$_SESSION['message'] = "The data entered were invalid, Please re-enter your data";
		}
	}
	else
	{
		$_SESSION['message'] = "The Password Not Matched";
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
    <title>Au Register Forms by Colorlib</title>

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
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"> </div>
                <div class="card-body">
                    <h2 class="title">Welcome</h2>                       
                     <form method="POST">
					 <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
					<div class="form-row p-t-20">
                            
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Admin
                                    <input type="radio" checked="checked" name="exist" value="Admin">
                                </label>
                                <label class="radio-container">User
                                    <input type="radio" name="exist" value="User">
                                </label>
                            </div>
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
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="cpassword" required>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
							<a href="login.php" colo> login </a>
                        </div>
                    </form>
                </div>
            </div>
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
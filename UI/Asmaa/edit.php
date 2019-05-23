<?php
session_start();
$_SESSION['errormessage'] = '';
$_SESSION['successmessage'] = '';

$mysqli = new mysqli('localhost', 'root', '', 'tawa');
		
        
        $sql = "SELECT * FROM `user` WHERE `Username`='".$_SESSION['user']."'";

		$result = $mysqli->query($sql);
		while($row = $result->fetch_assoc())
		{
			

				$_SESSION['password'] = $row['Password'];
			
				$_SESSION['fname'] = $row['FullName'];
			
			
				$_SESSION['phone']= $row['Phone'];
			
			
				$_SESSION['email'] = $row['Email'];
			
			
				$_SESSION['cpassword']= $row['confirmpassword'];
			
		}

		
		
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
		if($_POST['password'] == $_POST['cpassword'])
		{
			$sql = "UPDATE `user` SET `Password`='".$_POST['password']."',`FullName`='".$_POST['name']."',`Phone`='".$_POST['phone']."',`Email`='".$_POST['email']."',`confirmpassword`='".$_POST['cpassword']."' WHERE `Username`='".$_SESSION['user']."'";
			
			if($mysqli->query($sql) === true)
			{
				$_SESSION['successmessage'] = "Congratulations! this user has been updated successfully";
				//header("location: admin.php");

				
			}else
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
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Edit User</title>

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
                    <form method="post">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Full Name" name="name">
                            <input class="input--style-3" type="text" placeholder="Full Name" name="name" value="<?php echo $_SESSION['fname']; ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="User Name" name="uname">

                            <input class="input--style-3 js-datepicker" type="text" placeholder="User Name" value="<?php echo $_SESSION['user']; ?>" name="uname">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" value="<?php echo $_SESSION['email']; ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" value="<?php echo $_SESSION['phone']; ?>">
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" value="<?php echo $_SESSION['password']; ?>">
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="cpassword">

                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_SESSION['cpassword']; ?>">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="button" style=" background-color: red;" onclick="window.location.href='admin.php'">Cancel</button>

                           
                            <button class="btn btn--pill btn--green" type="submit" style="float: right;" onclick="window.location.href='updateSuccess.html'">Update</button>
							
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

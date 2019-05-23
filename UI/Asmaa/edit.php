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
<!DOCTYPE html>
<html lang="en">
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

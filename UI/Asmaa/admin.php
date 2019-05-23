<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tawa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

		
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="admin.css">
<title>Admin Page</title>
</head>

<body>
<nav style="height: 50px; background-color: white; font-family:fantasy; font-size:30px; position: fixed; width: 100%;"> TAWA

<button style="float:right; margin-right: 30px;" class="button">Logout</button>
</nav>


	<center>
				
		

<div class="row">
  <div class="left" style="background-color:#0000009c; width: 100%; height:650px;">
    <center>Admin Panel</center>

	<form method='post'>
    <div style="float: left; display: inline;">
    <h2 style="color: white;"> Current Users</h2>
    <input type="text" id="mySearch" name="uname" onkeyup="myFunction()" placeholder="Type here.." title="Type in a category" />
	<button type="submit" name = "search" value = "Search" class="button" style="display: inline; padding:5px;"  >
		<img src='img/icons/search.png' style='width: 20px; height: 17px;' />  Search
	</button>
	<button type='submit' name = 'edit' class='button' style='display: inline; padding:4px;margin-top:5px;"'onclick="window.location.href='registration.html'">
         <img src='img/icons/edit.png' style='width: 20px; height: 17px;' />  Edit
    </button>
	<button type = 'submit' class='button' name='delete' style='display:inline;padding:4px;' onclick=''>
        <img src='img/icons/trash.png' style='width: 20px; height: 17px;' />  Delete
    </button>
    <br> <br> <br>

    <ul id="myMenu" style="color: white; margin-left: 20px;">

		<?php
			if (!isset($_POST['search']) && !isset($_POST['delete'])){
				$sql = "SELECT `Username` FROM `user` WHERE 1";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc())
				{
					echo "<li style='font-size:25px;'> $row[Username]"."</li>"."<br> <br>";
				}
			}
			
			if (isset($_POST['search'])){
				$_SESSION['user']= $_POST['uname'];
	           			
				$sql1 = "SELECT `Username` FROM `user` WHERE Username='".$_POST['uname']."'";
				$res1 = $conn->query($sql1);
				while($row1 = $res1->fetch_assoc()){
					echo "<li name = 'name' style='font-size:25px;'> $row1[Username]"."</li>"."<br> <br>";
				}
			
			}
			if (isset($_POST['edit'])){
				
				header("location:edit.php");
				
				}
			if(isset($_POST['delete'])){
				$sql2 = "DELETE FROM `user` WHERE Username='".$_SESSION['user']."'";
				$res2 = $conn->query($sql2);
				if($res2 === true){
					header("location:admin.php");
				}
			}
				
		?>
    </ul>
	</form>

  </div>


    <a href="#" class="button" style="float: right; display: inline; margin-right: 35%; margin-top: 20%;" onclick="window.location.href='add.php'">Add a new user</a>
    

  </div>
</div>
</center>
</body>
</html>

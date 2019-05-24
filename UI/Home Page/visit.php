<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="header.css" type="text/css"/>
		<base target="_top">
<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;  
}
body{
   background-image:URL("background.svg");

}
.section  {
	font-size: 2rem;
font-family: fantasy;;
z-index: 1;  
}
.card-img
{
	margin-left: 40;
	border: 1px solid transparent;
	border-radius: 10px;
	width: 40%;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  height:30%;
  padding: 50px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
p{
font-size:14;
}
</style>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['user']))
{
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
if(isset($_POST["sirlanka"])){
	$_SESSION['same']=$_SESSION['user'];
	header('location:../Home Page/Log-Reg-dest-UI/pages/sriLanka/main.php');
}
if(isset($_POST["malysia"])){
	$_SESSION['same']=$_SESSION['user'];
	header('location:../Home Page/Log-Reg-dest-UI/pages/malaysia/main.php');
}
if(isset($_POST["dubai"])){
	$_SESSION['same']=$_SESSION['user'];
	header('location:../Home Page/Log-Reg-dest-UI/pages/dubai/main.php');
}
if(isset($_POST["turkey"])){
	$_SESSION['same']=$_SESSION['user'];
	header('location:../Home Page/Log-Reg-dest-UI/pages/turkey/main.php');
}
if(isset($_POST["reserved"])){
	$_SESSION['same']=$_SESSION['user'];
	header('location:../Asmaa/Reserved Trips.php');
}
}
else
{
	header("Location:../Log-Reg-UI/login.php");
}
 ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		
			<a class="navbar-brand" href="Home View.php">TAWA</a>
			<div class="collapse navbar-collapse nav-items" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item">
				<a class="nav-link links" href="../Log-Reg-UI/registration.php">Sign up <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<h3 class="nav-link links">
			  </li>
			  <form method="post" action="Home View.php"> 
			  <li class="nav-item">
				<button class="nav-link links" type="submit" name="reserved">Reserved Trips</button>
				
			  </li>
			  </form>

			</ul>
		
			</div>
			</nav>
<div align="right" id="btnContainer">
  <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
  <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>

<div class="row">
  <div class="column" >
  <table cellspacing="20">
  <tr>
  <td>
    <p margin-left="100px" class="section">SRI LANKA</p>
<img class="card-img" src="shangri-las.jpg" alt="Country" height="100" width="150" hspace="50">
</td>
<td >
</br>
	</br>
	</br>
	</br>
    <p>Where to go: Temple of the Tooth,Sigiriya,Yala National Park</p>
	<p>Restaurants: The Lagoon, Nuga Gama, Ministry of Crab</p>
	<p>Airlines: Egypt Air,Fly Emirates,Qatari Airways</p>
	<form action="Home View.php" method="post">
	<button class="btn btn-lg btn-block btn-danger" type="submit" name="sirlanka">readmore</button>
	</form>
	</td>
	
	</tr>
	</table>
  </div>
  <div class="column" >
  <table cellspacing="10">
  <tr>
  <td>
  <center>  <p class="section">TURKEY</p> </center>
<img class="card-img" src="Turkey.jpg" alt="Country" height="100" width="150" hspace="50" >
    </td>
	<td>
	</br>
	</br>
	</br>
	</br>
    <p>Where to go: Istanbul,Pamukkale,Antalya</p>
	<p>Restaurants: Istanbul Restaurants, Ankara Restaurants, Bursa Restaurants</p>
	<p>Airlines: Egypt Air,Fly Emirates,Qatari Airways</p>
	<form action="Home View.php" method="post">
	<button class="btn btn-lg btn-block btn-danger" type="submit" name="turkey">readmore</button>
	</form>
	</td>
	</tr>
	</table>
  </div>
</div>

<div class="row">
  <div class="column" >
  <table cellspacing="20">
  <tr>
  <td >
<center>  <p class="section">MALYSIA</p> </center>
<img class="card-img" src="malysia.jpg" alt="Country" height="100" width="150" hspace="50">
    </td>
	<td >
	</br>
	</br>
	</br>
	</br>
    <p>Where to go: Kuala Lumpur,Penang,Langkawi</p>
	<p>Restaurants: Johor Bahru Restaurants, NURMALAYSIA CAIRO,Penang Island Restaurants</p>
	<p>Airlines: Egypt Air,Fly Emirates,Qatari Airways</p>
	<form action="Home View.php" method="post">
	<button class="btn btn-lg btn-block btn-danger" type="submit" name="malysia">readmore</button>
	</form>
	</td>
	</tr>
	</table>
	</div>
  <div class="column" >
  <table cellspacing="20">
  <tr>
  <td>
  <center>  <p class="section">DUBAI</p> </center>
<img class="card-img" src="palmislands1.jpg" alt="Country" height="100" width="150" hspace="50">
</td>
<td>
</br>
	</br>
	</br>
	</br>
 <p>Where to go: Dubai Marina,Burj Khalifa,Burj Al Arab Jumeirah</p>
	<p>Restaurants: Dubai House,Maiden Shanghai,Ahlan First Class Lounge</p>
	<p>Airlines: Egypt Air,Fly Emirates,Qatari Airways</p>
	<form action="Home View.php" method="post">
	<button class="btn btn-lg btn-block btn-danger" type="submit" name="dubai">readmore</button>
	</form>
	</td>
	</tr>
	</table>
	</div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
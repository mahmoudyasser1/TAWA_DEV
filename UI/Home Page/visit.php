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
location: left;
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
  width: 40%;
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
width: 160%;
position: center;
}
</style>
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



 ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		
			<a class="navbar-brand" href="Home View.php">TAWA</a>
			<div class="collapse navbar-collapse nav-items" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item">
				<a class="nav-link links" name ="log" href="../Log-Reg-UI/login.php">Login <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link links" name ="log" href="../Log-Reg-UI/registration.php">SignUp <span class="sr-only">(current)</span></a>
			  </li>
			 
			  

			</ul>
		
			</div>
			</nav>
<div align="right" id="btnContainer">
  <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
  <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>
<div class="row" >
  <div class="column" >
  <table cellspacing="20">
  <tr>
  <td>
    <p class="section">SRI LANKA</p>	
	<img class="card-img" src="shangri-las.jpg" alt="Country" style=" height: 150px; width: 200px;" hspace="50">
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
	<button class="btn btn-lg btn-block btn-danger" type="submit" name="sirlanka" style="color:black;">Read more</button>
	</form>
	</td>
	
	</tr>
	</table>
  </div>
  <div class="column" >
  <table cellspacing="20">
  <tr>
  <td>
<p class="section">TURKEY</p>	
<img class="card-img" src="Turkey.jpg" alt="Country" style=" height: 150px; width: 200px;" hspace="50">
</td>
<td>
</br>
</br>
</br>
	</br>
 <p>Where to go: Istanbul,Pamukkale,Antalya</p>
	<p>Restaurants: Dubai House,Maiden Shanghai,Ahlan First Class Lounge</p>
	<p>Airlines: Egypt Air,Fly Emirates,Qatari Airways</p>
	<form action="Home View.php" method="post">
	<button class="btn btn-lg btn-block btn-danger" type="submit" name="turkey" style="color:black;">Read more</button>
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
<p class="section">MALYSIA</p>
	<img class="card-img" src="malysia.jpg" alt="Country" style=" height: 150px ; width: 200px;" hspace="50">
    </td>
	<td >
	</br>
	</br>
	</br>
       <p>Where to go: Kuala Lumpur,Penang,Langkawi</p>
	<p>Restaurants: Johor Bahru Restaurants, NURMALAYSIA CAIRO,Penang Island Restaurants</p>
	<p>Airlines: Egypt Air,Fly Emirates,Qatari Airways</p>
	<form action="Home View.php" method="post">
        <button class="btn btn-lg btn-block btn-danger" type="submit" name="malysia" style="color:black;">Read more</button>
	</form>
	</td>
	</tr>
	</table>
	</div>
  <div class="column" >
  <table cellspacing="20">
  <tr>
  <td>
<p class="section">DUBAI</p>	
<img class="card-img" src="palmislands1.jpg" alt="Country" style=" height: 150px; width: 200px;" hspace="50">
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
	<button class="btn btn-lg btn-block btn-danger" type="submit" name="dubai" style="color:black;">Read more</button>
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
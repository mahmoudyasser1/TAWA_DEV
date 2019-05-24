<html>
<head>
<title> Malaysia </title>
<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link  rel="stylesheet" type="text/css" href="style.css">
 
<?php
session_start();
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

if(isset($_POST["book"])){ 
$_SESSION['user']=$_SESSION{'same'};
$_SESSION['destination']="malaysia";
$_SESSION['FN']="4444";

 header('Location:../../../../Booking/Booking.php');
}
if(isset($_POST["feed"])){ 
$_SESSION['user']=$_SESSION{'same'};
$_SESSION['destination']="malaysia";
 header('Location:../../../../Rating/Rating &Feedback.php');
}
?>
</head>
<body>

<center>
<div class="section" >
<h1 class="section h1">Welcome To Malaysia</h1> 
    <div class="section1" >
		<video autoplay loop muted width="100%">
			<source src="../../videos/Kuala Lumpur, Malaysia Travel Guide - Must-See Attractions.mp4" type="video/mp4">
		</video>
	</div>
</div>
</center>
<div class="page" > 
		<div class="subpage1" type="row" style="width:100%; height:600px" >
			<div style="float:left; width:90%; padding-left:20px;">
				<p >
		 If countries were awarded for diversity, Malaysia would top first place. Not only is Malaysia a melting pot of ethnic cultures, but it is also a blend of many different customs, cuisines and religions all coexisting peacefully together. From large island groups to mountains, fertile highlands and tropical rainforest, the country’s geography is every bit as diverse. 
				</p>
			</div>
				<br>
			<div style="float:left;">
				<img src="../../images/malaysia/kuching.jpg" width="480" height="300">
			</div>
			<div style="float:left; width:50%; height:600px;">
				<p>
				What’s more, Malaysia is a unique country in that is divided into two main landmasses. West Malaysia occupies the southern half of a peninsula shared with Thailand, while across the South China Sea is East Malaysia, situated on the Borneo island.
				</p>
			</div>
		</diV>
</div>
<br>
<hr>
<diV>
<center>
		<diV>
		<h1> Why visit Malaysia ?! </h1>
		<table >
		<tr>
		<td width="350px">
			</diV>
					<div class="section" >
						<p class="section p"> Cuisine </p> 
					<div class="section1">
					<img src="../../images/malaysia/kota_bharu.jpg" height="250px" width="550px" >
			</div>
		</td>
		<td width="350px">  
		</diV>
			<div class="section" >
						<p class="section p"> Shopping </p> 
					<div class="section1">
					<img src="../../images/malaysia/shopping.png" height="400px" >
			</div>
		</td>
		</tr>
		<td> 
		<div class="section" >
						<p class="section p"> Islands </p> 
					<div class="section1">
					<img   src="../../images/malaysia/kota_kinabalu.jpg" height="400px">
			</div>
		</td>
		<td> 
		<div class="section" >
						<p class="section p"> beaches </p> 
					<div class="section1">
					<img   src="../../images/malaysia/langkawi.jpg" height="320px">
			</div>
		</td>
		<tr>	
		</tr>
		</table>
		</diV>
		<br>
		<hr>
		<br>
		<h1> where to go ?! </h1>
	
	</center>
</diV>
  	
<div class="my-carousel-wrapper">
  <span id="item-1"></span>
  <span id="item-2"></span>
  <span id="item-3"></span>
  <span id="item-4"></span>
  <div class="my-carousel-item item-1">
	<h2> Gunung Mulu National Park</h2>
    <p class="comment">Famous for its extraordinary limestone karst formations and phenomenal cave systems, the Gunung Mulu National Park is one of the most awe-inspiring natural attractions in all of Southeast Asia. Located in Malaysian Borneo in the Sarawak State, this national park features some of the largest and longest cave systems in the world. Included in these is the world’s largest cave chamber, the Sarawak Chamber, which is estimated large enough to hold 40 Boeing 747 aircraft.</p>
    <a class="arrow arrow-prev" href="#item-3"></a>
    <a class="arrow arrow-next" href="#item-2"></a>
  </div>
  
  <div class="my-carousel-item item-2">
    <h2>Langkawi</h2>
    <p class="comment" >Located off Malaysia’s northwestern coast in the Andaman Sea, Langkawi is an archipelago of 99 islands boasting picturesque beaches, rainforest, mangroves and forest-clad mountains. In recent years, resorts, hotels, restaurants and other tourist facilities have developed in Langkawi, offering visitors the opportunity to experience the archipelago’s exceptional natural beauty.</p>
    <a class="arrow arrow-prev" href="#item-1"></a>
    <a class="arrow arrow-next" href="#item-3"></a>
  </div>
  <div class="my-carousel-item item-3">
	<h2>Taman Negara</h2>
    <p class="comment" >Encompassing three states across the northern part of West Malaysia, Taman Negara is reputed to be the oldest tropical rainforest in the world. A popular ecotourism and adventure destination, this national park is teeming in in wildlife from rare plants to exotic birds and scarce animals like the Malayan Tiger, Asian elephant and Sumatran Rhinoceros. One of the most popular things to do in Taman Negara is the Canopy Walk, a long suspension bridge high above the treetops where visitors can walk and glimpse exotic birds. Guided night safaris are also available to see plants that only bloom at night, glow-in-the-dark fungi and nocturnal creatures like owls, leopard cats and water dragons.</p>
    <a class="arrow arrow-prev" href="#item-2"></a>
    <a class="arrow arrow-next" href="#item-4"></a>
  </div>
<div class="my-carousel-item item-4">
    <h2>Penang</h2>
    <p class="comment">Located in the Strait of Malacca off West Malaysia’s northwestern coast, Penang Island is a popular tourist destination due to its historic George Town and rich culinary diversity. Its position along one of the world’s most traveled shipping routes has infused Penang with a colorful array of cultures, architecture and cuisine. No visit to Penang would be complete without a trishaw ride or walk around the island’s capital city, George Town, to see its British colonial architecture and historic Chinese and Indian temples.</p>
    <a class="arrow arrow-prev" href="#item-3"></a>
    <a class="arrow arrow-next" href="#item-1"></a>
  </div>
  </div>
  <form action="main.php" method="post">
		<input class="btn btn-danger btm10" type="submit" name=" book" value="Book Flight number 4444" />
	</form>
	<form action="main.php" method="post">
		<input class="btn btn-danger btm60" type="submit" name="feed" value="Write Feedback " />
	</form>
	<?php

$sql1="SELECT `Comment` ,`Travel_Destination` FROM `feedback` f ,`has` h
where h.`FeedBack_ID`=f.`ID` and `Travel_Destination`= 'malaysia'";

$result1 = $conn->query($sql1);
while($row1=mysqli_fetch_assoc($result1)) {
	?>
	<h1><center style="background-color: black; color: white;">Comments <br> <span style="font-family: fantasy; font-size: 30px;"><?php echo $row1['Comment'];?> </span></center></h1>
	<?php
}

?>
	<table border="0" id="footer">
	<tr>
		<td><a href="#Top" target="_self">Top</a></td>
		<td><a href="../about/about.html" target="_top">About Us</a></td>
		<td><a href="../contact/contact.html" target="_top">Contact Us</a></td>
		<td class="social"><a href="https://www.facebook.com/salsabeelysf" target="_blank"><img width="25px" height="25px" src="../../images/Footer/fb1.png"/></a></td>
		<td class="social"><a href="https://twitter.com/Salsabeelsay" target="_blank"><img width="30px" height="30px" src="../../images/Footer/tw.png"/></a></td>
		<td class="social"><a href="#" target="_blank"><img width="30px" height="30px" src="../../images/Footer/insta1.png"/></a></td>
	</tr>
	</table>
</body>
</html>		
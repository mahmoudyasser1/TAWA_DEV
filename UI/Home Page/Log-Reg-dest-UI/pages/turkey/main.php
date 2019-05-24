<html>
<head>
<title> Turkey </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
<link  rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
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
session_start();
if(isset($_POST["book"])){ 
$_SESSION['user']=$_SESSION{'same'};
$_SESSION['destination']="turkey";
$_SESSION['FN']="2222";

 header('Location:../../../../Booking/Booking.php');
}
if(isset($_POST["feed"])){ 
$_SESSION['user']=$_SESSION{'same'};
$_SESSION['destination']="turkey";
 header('Location:../../../../Rating/Rating &Feedback.php');
}
$sql1="SELECT `Comment` ,`Travel_Destination` FROM `feedback` f ,`has` h
where h.`FeedBack_ID`=f.`ID` and `Travel_Destination`= 'turkey'";

$result1 = $conn->query($sql1);
while($row1=mysqli_fetch_assoc($result1)) {
	?>
	<h1><?php echo $row1['Comment'];?></h1>
	<?php
}

?>
<center>
<div class="section">
<h1 class="section h1">Welcome To Turkey</h1> 
    <div class="section1">
		<video autoplay loop muted >
			<source src="../../videos/turkey.mp4" type="video/mp4">
		</video>
	</div>
</div>
</center>
<div class="container" style="padding: 50px;"> 		
	<div class="row">
		<div class="col-8">
			<div class="card ">
				<blockquote class="blockquote mb-0">
				<p>Turkey is one of the leading tourism destinations in the world, with stunning scenery and rich historic legacy.
				Explore Turkey's most popular holiday destinations, beautiful coastline, spectacular icons, exciting events and cultural festivals.
				</p>
				</blockquote>
			</div>
		</div>
		<div class="col-4">
			<div class="card ">
			<img class="card-img" src="../../images/turkey/konya1.jpg" alt="Card image">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<div class="card ">
			<img class="card-img" src="../../images/turkey/bodrum.jpg" alt="Card image">
			</div>
		</div>
		<div class="col-8" style="padding-top:">
			<div class="card ">
				<blockquote class="blockquote mb-0">
				<p>Plan your holiday to Turkey with great deals on accommodation, travel advices and a variety of things to do and see.
				Fun, joy, happiness, neverending journey.
				</p>
				</blockquote>
			</div>
		</div>
	</div>

</div>
<hr>
<div>
<center>
		<div>
		<h1> Why visit Turkey ?! </h1>
		<table>
		<tr>
		<td>
			<div class="section" >
				<p class="section p">Historical Places </p> 
				<div class="section2">
					<img src="../../images/turkey/ephesus1.jpg" height="250px" >
				</div>
			</div>
		</td>
		<td>  
			<div class="section" >
				<p class="section p"> Special Activities </p> 
				<div class="section2">
					<img src="../../images/turkey/cappadocia1.jpg" height="250px" >
				</div>
			</div>
		</td>
		</tr>
		<td> 
			<div class="section" >
				<p class="section p"> Sea </p> 
				<div class="section2">
					<img   src="../../images/turkey/antalya2.jpg" height="250px">
				</div>
			</div>
		</td>
		<td> 
			<div class="section" >
				<p class="section p"> Shopping </p> 
				<div class="section2">
					<img   src="../../images/turkey/shopping.png" height="250px">
				</div>
			</div>
		</td>
		<tr>	
		</tr>
		</table>
		</div>
		<br>
		<hr>
		<br>
		<h1> where to go ?! </h1>
	
	</center>
</div>

		
<div class="my-carousel-wrapper">
  <span id="item-1"></span>
  <span id="item-2"></span>
  <span id="item-3"></span>
  <span id="item-4"></span>
  <div class="my-carousel-item item-1">
	<h2>Istanbul</h2>
	<p class="comment">Once serving as the capital of the Ottoman and Byzantine Empires, Istanbul today is the largest city in Turkey and one of the largest in the world. Istanbul stretches across a narrow strait that connects Asia and Europe, making it the only city in the world spanning two continents. Impressive architecture, historic sites, dining, shopping, nightlife and exotic atmosphere all make Istanbul one of the best places to Visit in Turkey. The Old City is where most of the city’s impressive historic sites are found, which include the Hagia Sophia, Blue Mosque and Topkapi Palace.</p>
    <a class="arrow arrow-prev" href="#item-3"></a>
    <a class="arrow arrow-next" href="#item-2"></a>
  </div>
  
  <div class="my-carousel-item item-2">
	<h2>Cappadocia</h2>
	<p class="comment" >Situated in Central Anatolia, Cappadocia is best known for its fairytale landscape of unusual formations resembling chimneys, cones and pinnacles. Natural processes such as ancient volcanic eruptions and erosion have all sculpted these odd formations over the ages. Thousands of years ago, mankind added remarkable touches to the landscape by carving out houses, churches and underground cities from the soft rock. The Hittites were the first to chisel out underground tunnel complexes, seeking safety from invading Persians and Greeks. Much later Christians sought refuge in Cappadocia’s tunnels and caves. Today, some of the caves in the region are actually hotels and cater to tourists.</p>
	<a class="arrow arrow-prev" href="#item-1"></a>
    <a class="arrow arrow-next" href="#item-3"></a>
  </div>
  <div class="my-carousel-item item-3">
   <h2>Ephesus</h2>
	<p class="comment" >Europe’s most complete classical metropolis, Ephesus is an ancient site located in Aegean Turkey. By the 1st century BC, Ephesus was one of the largest cities in all of the Roman Empire, boasting one of the Seven Wonders of the Ancient World, the Temple of Artemis. The ruins of Ephesus are well preserved and contained within a large archaeological site, making it one of Turkey’s most popular tourist attractions. Its attractions include the massive Theater, the Temple of Hadrian and the magnificent Celsus Library, a two-story structure that was built to house more than 12,000 scrolls.</p>
    <a class="arrow arrow-prev" href="#item-2"></a>
    <a class="arrow arrow-next" href="#item-4"></a>
  </div>
<div class="my-carousel-item item-4">
   <h2>Bodrum</h2>
	<p class="comment">Located in the southern Aegean region of Turkey, Bodrum was once home to the Mausoleum, one of the Seven Wonders of the Ancient World. Today, its intriguing ruins, stunning beaches and cliff-top resorts attract people from all over the world. No visit to Bodrum would be complete without seeing the Castle of St. Peter, also known as Bodrum Castle. Built from 1402 by the Knights Hospitaller it now operates as a museum. On Bodrum’s eastern side, tourists will find a beautiful beach overlooking brilliant blue water. Near the beach are plenty of cafes, bars and nightclubs. On the western side of town is the marina, shopping centers and restaurants.</p>
   <a class="arrow arrow-prev" href="#item-3"></a>
   <a class="arrow arrow-next" href="#item-1"></a>
  </div>
  </div>
  <form action="main.php" method="post">
	<input class="btn btn-danger btm10" type="submit" name="book"value="Book Flight number 3333" />
	</form>
	<form action="main.php" method="post">
		<input class="btn btn-danger btm60" type="submit" name="feed" value="Write Feedback " />
	</form>
	
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
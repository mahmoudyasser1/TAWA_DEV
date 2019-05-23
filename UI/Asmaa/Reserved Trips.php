<html >
<head>
<link rel="stylesheet" type="text/css" href="Booking style.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<title> Reserved Trips </title>
<body for id="white" topmargin="60%"> 
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
$x = 1;


	
	?>			

<form >
<center>


				
				 <table  for id="white"  cellspacing="30%" cellpadding="20%" width="40%">
   
     <tr>
         <td colspan="2">
	       <center><p>Your Reserved Trips</p></center>	
		   
	     </td>	
      </tr>
	  
     <?php
$sql1="SELECT `FlightNumber`, `FlightType`, `LevelOfService`, `AirLines`, `Travel_Date`, `Travel_Destination`,`NumberOfSeats`, `PaymentMethod`  FROM `flight` f ,`book` b 
where f.`FlightNumber`=b.`Flight_FlightNumber` and `User_Username`= '".$_SESSION['user']."'";

$result1 = $conn->query($sql1);

	 
	 while($row1=mysqli_fetch_assoc($result1))
				{
					?>
				
				
				 <tr>
				 
         <td>
		 
		 <br>
		 
           <label class="style" > <span style="color:#dc3545;">Flight #<?php echo $x++;?> </span><br><br>Flight Type </label>
	     </td>
         <td>
           <label class="style"><br><br><br><?php echo $row1['FlightType'] ?></label>

         </td>		 
      </tr>
	  
	  <tr>
         <td>
           <label class="style">Airline</label>
	     </td>
		 <td>
		   <label class="style"><?php echo $row1["AirLines"]?></label>	
		 </td>
         	 
      </tr>
	  
		
	  
	  <tr>
         <td>
           <label class="style">Service Level</label>
	     </td>
         <td >
		 <label class="style"><?php echo $row1["LevelOfService"] ?></label>
         </td>		 
      </tr>

				
	
				 <tr>
         <td>
           <label class="style">Payment Method</label>
	     </td>
         <td>
	      <label class="style"><?php echo $row1['PaymentMethod']?></label>     
		</td>		 
       </select>
	  </tr>
	  	<tr>
         <td>

		  <label class="style">Number of seats</label>
	     </td>
         <td>
           <label class="style"><?php echo $row1["NumberOfSeats"]?></label>
         </td>		 
      </tr>

	  <?php
	  	  if(isset($_GET['cancel'])){
	$sql2 = "DELETE FROM `flight` WHERE FlightNumber='".$row1['FlightNumber']."'";
	$result2 = $conn->query($sql2);
	$sql3 = "DELETE FROM `book` WHERE User_Username='".$_SESSION['user']."'";
	$result3 = $conn->query($sql3);
	header("location:Reserved Trips.php");
	
}
				}	
	  ?>

	  <tr>
		<td colspan="2"> <center>   
			<form method = "POST">
				<input  class="btn btn-danger" type="submit" name="cancel" value="Cancel The Trip" />
			</form>
			<input class="btn btn-warning" type="button" value="Home" onclick="window.location.href='../Home Page/Home View.php'" />
		</td>
	
	  </tr>
				<?php
				
				
				?>
				
	  
	  </table>

				

		   
</center>
</form>



</center>
	<script>
	function myFunction()
	{
	  var x = document.getElementById("payment").value;
	  if(x == "Cash")
	  {
	  document.getElementById("Card").disabled=true;
	  }
	  else 
	  {
	  	  document.getElementById("Card").disabled=false;
	  }
	}
	</script>
  



</body>
</html>
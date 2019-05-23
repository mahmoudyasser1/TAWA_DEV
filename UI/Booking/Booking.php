<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Booking style.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
//to be commited
</head>
<title> Booking </title>
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


if(isset($_POST["Book"])){     

		   $sql2 = "INSERT INTO `book`(`User_Username`, `Flight_FlightNumber`, `NumberOfSeats`, `PaymentMethod`) 
		   values('".$_SESSION['user']."','".$_POST['FN']."','".$_POST['seats']."','".$_POST['payment']."')";
           $sql3="INSERT INTO `flight`(`FlightNumber`, `FlightType`, `LevelOfService`, `AirLines`, `Travel_Date`, `Travel_Destination`) 
		   VALUES ('".$_POST['FN']."','".$_POST['Type']."','".$_POST['LOS']."','".$_POST['airline']."','".$_POST['Date']."','".$_POST['Destination']."')";

		  
			$result2 = $conn->query($sql2);
			$result3 = $conn->query($sql3);
			header('Location:../Booking/Thanks for booking.html');
	   
	   
		
     
    

}

?>

<body for id="white" topmargin="60%"> 

<form method="post" action="Booking.php">
<center>
		   
   <table  for id="white"  cellspacing="30%" cellpadding="20%" width="40%">
   
     <tr>
         <td colspan="2">
	       <center><p>Booking Form!</p></center>	       
	     </td>	
      </tr>
	
      <tr>
         <td>
		  <label class="style">Number of seats</label>
	     </td>
         <td class="input">
           <input type="number" name="seats" min="1" max="4" required>
         </td>		 
      </tr>
	  <tr>
         <td>
           <label class="style">Service Level</label>
	     </td>
         <td class="input">
		 <select name="LOS">
		 <option value="Economy" width="30">Economy</option>
		<option value="Business" width="30">Business</option>
		<option value="Luxurious" width="30">Luxurious</option>
         </select>
         </td>		 
      </tr>
	  
	  <tr>
         <td>
           <label class="style">Payment Method</label>
	     </td>
         <td class="input">
	      <select name="payment" >
		<option value="Debit Card" width="30">Debit Card</option>      
	    <option value="Cash" width="30">Cash</option>
		</td>		 
       </select>
	  </tr>
	  
	  <tr>
         <td>
           <label class="style">Debit card Number</label>
	     </td>
		 <td class="input">
		 
		 <input name="Card" type="Number" required>
		 
		 </tr>
	  <tr>
         <td>
           <label class="style">Flight Type</label>
	     </td>
         <td class="input">
           <input type="radio" name="Type" value="One-Way" required >One-Way</input>
		   <input type="radio" name="Type" value="Round-Trip">Round-Trip</input>
         </td>		 
      </tr>
	  <tr>
         <td>
           <label class="style">Flight Number</label>
	     </td>
		 <td class="input">
		 
		 <input name="FN" type="Number" required>
		 
		 </tr>
	    <tr>
         <td>
           <label class="style">Travel Date</label>
	     </td>
		 <td class="input">
		 
		 <input name="Date" type="date" required>
		 
		 </tr>
		   <tr>
         <td>
           <label class="style">Travel Destination</label>
	     </td>
		 <td class="input">
		 
		 <input name="Destination" type="text" required>
		 
		 </tr>
	  <tr>
         <td>
           <label class="style">Airline</label>
	     </td>
		 <td>
		   <select name="airline" >
		     <option value="Egypt Air" width="30">Egypt Air</option>
			 <option value="Fly Emirates" width="30">Fly Emirates</option>
			 <option value="Qatari Airways" width="30">Qatari Airways</option>
			 <option value="Turkish Airlines" width="30">Turkish Airlines</option>
			 <option value="Lufthansa"width="30">Lufthansa</option>
			 <option value="Air France " width="30">Air France </option>
		   </select>	
		 </td>
         	 
      </tr>
	  
	 
	  
	  <tr>
		<td colspan="2"> <center>     
			<input  class="btn btn-danger" type="submit" value="Book Now" name="Book" />
			<input class="btn btn-warning" type="button" value="Cancel" onclick="window.location.href='../Home Page/Home Page.html'" />
		</td>
	
	  </tr>
	  </table>
</center>
</form>



</center>
	<script>
	
	
	</script>
  



</body>
</html>
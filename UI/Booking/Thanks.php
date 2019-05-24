<html>
<head>
<link rel="stylesheet" type="text/css" href="Thanks style.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tawa";

if(isset($_POST["home"])){ 
$_SESSION['logged']=true;
 header('Location:../../../../Home Page/Home View.php');
}
?>
<body  for id="table" topmargin="15%" background="shangri-las.jpg" width="100%">
<center><h1  class="h1">Your flight has been Reserved</h1>
<center>			
<input class="btn btn-primary" type="button" name ="home" value="Go To Home Page" onclick="window.location.href='../Home Page/Home View.php'" />
</center>
<br/>
<br/>




</center>

</body>

</html>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<title>FeedBack</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='css/laxvek.css'>

      <link rel="stylesheet" href="css/style.css">

<style>



body
{
background-image:url('download.jfif');
 background-size:cover; 
 scrolling:no;
}
div{
width: 100%;
    margin-left: 0%;
    margin-right: 0%;
    margin-top: 0%;
    margin-bottom: 0%;
    border-radius: 30px;
    background-color: rgba(0,0,0,0.6);
}
table{
<!-- height:80%;
width:90%;
margin-left:5%;
margin-right:5%;
margin-top:5%;
margin-bottom:5%;
border-radius:30px; --> 
background-color:rgba(0,0,0,0.6);

}
.td{
font-size:70;
align:left;
vertical-align:top; 
padding:20px;
color:white;
font-family:Cookie;

}
.mytable
{
float:left;
margin-left:25px;

}
textarea,input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
  border-radius:10px;
  border=0 none;
}
.dotted{

  border:none;
  border-top:1px dotted #f00;
  color:#fff;
  background-color:#fff;
  width:100%;
  margin: 0;
}
.mytable1
{
color:white;
font-size:60;
font-family:Parisienne;
margin=0; 
}
font
{
font-size:20;
color:white;
font-family:

}
.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
}
.rating > span {
  display: inline-block;
  position: relative;
  width: 1.1em;
  color:white; 
}
.rating > span:hover:before,
.rating > span:hover ~ span:before {
   content: "\2605";
   position: absolute;
}
</style>
<script>
var ratingValue;
$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently 
	
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
	$("#hidee").val(""+ratingValue);
	
    var msg = '';
    if (ratingValue > 1) {
        msg = 'Thanks! You rated this ' + ratingValue + ' stars.';
		
		
		
		
		
    }
    else {
        msg = 'We will improve ourselves. You rated this ' + ratingValue + ' stars.';
    }
    responseMessage(msg);
    
  });
  
  
});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html('<span>' + msg + '</span>');
}

</script>
</head>
<body>
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

if(isset($_POST['submit']))
{
	$comment=$_POST['feedback'];
	$num=$_POST['hide'];
$sql1 = "INSERT INTO `feedback` (`Comment`,`NumberOfStars`) values('".$_POST['feedback']."','".$_POST['hide']."')";
$result1 = $conn->query($sql1);

$sql2="select ID from `feedback` where Comment='$comment' and NumberOfStars='$num' ;";
$result2 = $conn->query($sql2);
if($result2){
	if(mysqli_num_rows($result2)>0){
		while($row =mysqli_fetch_assoc($result2)){
			$id=$row['ID'];
		}
	}
}

$sql3 = "INSERT INTO `has`( `Travel_Destination`,`FeedBack_ID`) VALUES ('".$_SESSION['destination']."','$id')";
$result3 = $conn->query($sql3);

  header('Location:Feedback Thanks.html');
  
  
}
?>





<div>
<table align="center">
<tr>
<th class="td"colspan="2"> Here you can share your experience:
<hr class="dotted">
</th>
<th>
</th>
</tr >

<tr>
<th class="mytable">
<form method="post" action="Rating &Feedback.php">



<div align='center' class="rating">


<!-- the new rating-->

<section class='rating-widget'>
  
  <!-- Rating Stars Box -->
  <div class='rating-stars text-center'>
    <ul id='stars'>
      <li class='star' title='Poor' data-value='1'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Fair' data-value='2'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5'>
        <i class='fa fa-star fa-fw'></i>
      </li>
    </ul>
  </div>

  <input type="hidden" name="hide" id="hidee" value="">

  
  <div class='success-box'>
    
    <div class='text-message'></div>
    
  </div>
  
  
  
</section>

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!--<script src='js/laxvek.js'></script>-->

  

    <script  src="js/index.js"></script>



<textarea cols="60" rows="10" name="feedback"> Message </textarea>
<center> <button type="submit" class="btn btn-lg btn-block btn-danger" name="submit"> Submit</button> </center>
</th>
<th >
<center class="mytable1" >We'd &#9829; to help you</center>
<br>
</tr>
</form>
</table>
</div>
</body>
</html>



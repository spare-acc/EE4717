<!DOCTYPE html>
<html lang="en">
<head>
<title>SPORTS UNLIMITED</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/columns.css">
</head>
<body>
<div class="topnav">
  <img src="soccer.jpg" width="100px" height="60px" align="left">
  <a href="index.html">Home</a>
  <a href="events.html">Events</a>
  <a href="about.html">About</a>
  <a href="contact.html">Contact Us</a>
  <a class="active" href="news.html">NewsRoom</a>
  <input type="text" placeholder="Search..">
</div>
<h1>Confirmation Page of Subcription</h1>
<div class="container">
<p>Thank you for submitting this form. 

<p>We have successfully received it. 

<p>Below is a summary of the information you provided.<br><br>  
<?php
echo 'First Name: ' . $_POST ["firstname"] . '<br>';
echo 'Last Name: ' . $_POST ["lastname"] . '<br>';
echo 'Email Address: ' . $_POST ["email"] . '<br>';

	$Firstname=$_POST['firstname']; 
	$Lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$conn = mysqli_connect('localhost', 'f33ee', 'f33ee', 'f33ee');
  

  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  } 
 
$query= "INSERT INTO customers(firstname, lastname, email)  ". "VALUES ('$Firstname', '$Lastname', '$email')"; 
 
mysqli_query ($conn, $query) 
or die ("Error querying database"); 
 
mysqli_close($conn); 
 
?>
<p style="padding-top:20px">
				<a href="index.html">Return to Home</a>
			</p>
</div>
<footer>
<small><i>Copyright &copy; 2019 SPORTS UNLIMITED PTE LTD
</i></small><br>​
<small><i><a href="sports@unlimited.com.sg">​
<a href="mailto:me@sports@unlimited.com.sg">sports@unlimited.com.sg</a>​
<i><small>​
</footer>
</body>
</html>
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
  <a class="active" href="contact.html">Contact Us</a>
  <a href="news.html">NewsRoom</a>
  <input type="text" placeholder="Search..">
</div>
<h1>Thank You for the Feedback</h1>
<div class="container">

<p>We have successfully received it. 

<?php
	$Firstname=$_POST['firstname']; 
	$Lastname=$_POST['lastname'];
	$contactno=$_POST['contactno'];
	$subject=$_POST['subject'];
	$conn = mysqli_connect('localhost', 'f33ee', 'f33ee', 'f33ee');	
  

  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  } 
 else
$query= "INSERT INTO feedback(firstname, lastname, contactno, subject) ". "VALUES ('$Firstname', '$Lastname', '$contactno', '$subject')"; 
 
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
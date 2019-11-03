<?php
session_start();
if (!isset($_SESSION['price'])){
	$_SESSION['price'] = array();
}
if (!isset($_SESSION['name'])){
	$_SESSION['name'] = array();
}
if (isset($_GET['buy'])) {
	$_SESSION['price'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
if (isset($_GET['buy'])) {
	$_SESSION['name'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SPORTS UNLIMITED</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS files/seating_plan.css">
<link rel="stylesheet" href="CSS files/breadcrumb.css">
</head>
<body>
	<div class="topnav">
	  <img src="images/soccer.jpg" width="100px" height="60px" align="left">
	  <a href="homepage.html">Home</a>
	  <a class="active" href="events.html">Events</a>
	  <a href="about.html">About</a>
	  <a href="contact.html">Contact Us</a>
	  <a href="news.html">NewsRoom</a>
	  <input type="text" placeholder="Search...">
	</div>
	
		<ul class="breadcrumb">
		  <li><a href="events.html">Events</a></li>
		  <li>Event Booking</a></li>
		</ul>

		<div class="columns" style="float:left;">
			<div class="content">
			<h3>Seating plan</h3>
			<form id="seats" method="get">
				<table>
					<td>
						<input type="radio" class="element" name="seat" value="10,1A" onclick="displaySeatDetails();">1A<br>
						<input type="radio" class="element" name="seat" value="10,2A" onclick="displaySeatDetails();">2A<br>
						<input type="radio" class="element" name="seat" value="10,3A" onclick="displaySeatDetails();">3A<br>
						<input type="radio" class="element" name="seat" value="10,4A" onclick="displaySeatDetails();">4A<br>
						<input type="radio" class="element" name="seat" value="10,5A" onclick="displaySeatDetails();">5A<br>
						<input type="radio" class="element" name="seat" value="10,6A" onclick="displaySeatDetails();">6A<br>
						<input type="radio" class="element" name="seat" value="10,7A" onclick="displaySeatDetails();">7A<br>
						<input type="radio" class="element" name="seat" value="10,8A" onclick="displaySeatDetails();">8A<br>
						<input type="radio" class="element" name="seat" value="10,9A" onclick="displaySeatDetails();">9A<br>
						<input type="radio" class="element" name="seat" value="10,10A" onclick="displaySeatDetails();">10A<br>
						<input type="radio" class="element" name="seat" value="10,11A" onclick="displaySeatDetails();">11A<br>
						<input type="radio" class="element" name="seat" value="10,12A" onclick="displaySeatDetails();">12A<br>
						<input type="radio" class="element" name="seat" value="10,13A" onclick="displaySeatDetails();">13A<br>
						<input type="radio" class="element" name="seat" value="10,14A" onclick="displaySeatDetails();">14A<br>
						<input type="radio" class="element" name="seat" value="10,15A" onclick="displaySeatDetails();">15A<br>
						
					</td>
					<td>
						<input type="radio" class="element" name="seat" value="10,1B" onclick="displaySeatDetails();">1B<br>
						<input type="radio" class="element" name="seat" value="10,2B" onclick="displaySeatDetails();">2B<br>
						<input type="radio" class="element" name="seat" value="10,3B" onclick="displaySeatDetails();">3B<br>
						<input type="radio" class="element" name="seat" value="10,4B" onclick="displaySeatDetails();">4B<br>
						<input type="radio" class="element" name="seat" value="10,5B" onclick="displaySeatDetails();">5B<br>
						<input type="radio" class="element" name="seat" value="10,6B" onclick="displaySeatDetails();">6B<br>
						<input type="radio" class="element" name="seat" value="10,7B" onclick="displaySeatDetails();">7B<br>
						<input type="radio" class="element" name="seat" value="10,8B" onclick="displaySeatDetails();">8B<br>
						<input type="radio" class="element" name="seat" value="10,9B" onclick="displaySeatDetails();">9B<br>
						<input type="radio" class="element" name="seat" value="10,10B" onclick="displaySeatDetails();">10B<br>
						<input type="radio" class="element" name="seat" value="10,11B" onclick="displaySeatDetails();">11B<br>
						<input type="radio" class="element" name="seat" value="10,12B" onclick="displaySeatDetails();">12B<br>
						<input type="radio" class="element" name="seat" value="10,13B" onclick="displaySeatDetails();">13B<br>
						<input type="radio" class="element" name="seat" value="10,14B" onclick="displaySeatDetails();">14B<br>
						<input type="radio" class="element" name="seat" value="10,15B" onclick="displaySeatDetails();">15B<br>
					</td>
					<td>
						<input type="radio" class="element" name="seat" value="10,1C" onclick="displaySeatDetails();">1C<br>
						<input type="radio" class="element" name="seat" value="10,2C" onclick="displaySeatDetails();">2C<br>
						<input type="radio" class="element" name="seat" value="10,3C" onclick="displaySeatDetails();">3C<br>
						<input type="radio" class="element" name="seat" value="10,4C" onclick="displaySeatDetails();">4C<br>
						<input type="radio" class="element" name="seat" value="10,5C" onclick="displaySeatDetails();">5C<br>
						<input type="radio" class="element" name="seat" value="10,6C" onclick="displaySeatDetails();">6C<br>
						<input type="radio" class="element" name="seat" value="10,7C" onclick="displaySeatDetails();">7C<br>
						<input type="radio" class="element" name="seat" value="10,8C" onclick="displaySeatDetails();">8C<br>
						<input type="radio" class="element" name="seat" value="10,9C" onclick="displaySeatDetails();">9C<br>
						<input type="radio" class="element" name="seat" value="10,10C" onclick="displaySeatDetails();">10C<br>
						<input type="radio" class="element" name="seat" value="10,11C" onclick="displaySeatDetails();">11C<br>
						<input type="radio" class="element" name="seat" value="10,12C" onclick="displaySeatDetails();">12C<br>
						<input type="radio" class="element" name="seat" value="10,13C" onclick="displaySeatDetails();">13C<br>
						<input type="radio" class="element" name="seat" value="10,14C" onclick="displaySeatDetails();">14C<br>
						<input type="radio" class="element" name="seat" value="10,15C" onclick="displaySeatDetails();">15C<br>
					</td>
					<td>
						<input type="radio" class="element" name="seat" value="15,1D" onclick="displaySeatDetails();">1D<br>
						<input type="radio" class="element" name="seat" value="15,2D" onclick="displaySeatDetails();">2D<br>
						<input type="radio" class="element" name="seat" value="15,3D" onclick="displaySeatDetails();">3D<br>
						<input type="radio" class="element" name="seat" value="15,4D" onclick="displaySeatDetails();">4D<br>
						<input type="radio" class="element" name="seat" value="15,5D" onclick="displaySeatDetails();">5D<br>
						<input type="radio" class="element" name="seat" value="15,6D" onclick="displaySeatDetails();">6D<br>
						<input type="radio" class="element" name="seat" value="15,7D" onclick="displaySeatDetails();">7D<br>
						<input type="radio" class="element" name="seat" value="15,8D" onclick="displaySeatDetails();">8D<br>
						<input type="radio" class="element" name="seat" value="15,9D" onclick="displaySeatDetails();">9D<br>
						<input type="radio" class="element" name="seat" value="15,10D" onclick="displaySeatDetails();">10D<br>
						<input type="radio" class="element" name="seat" value="15,11D" onclick="displaySeatDetails();">11D<br>
						<input type="radio" class="element" name="seat" value="15,12D" onclick="displaySeatDetails();">12D<br>
						<input type="radio" class="element" name="seat" value="15,13D" onclick="displaySeatDetails();">13D<br>
						<input type="radio" class="element" name="seat" value="15,14D" onclick="displaySeatDetails();">14D<br>
						<input type="radio" class="element" name="seat" value="15,15D" onclick="displaySeatDetails();">15D<br>
					</td>
					<td>
						<input type="radio" class="element" name="seat" value="15,1E" onclick="displaySeatDetails();">1E<br>
						<input type="radio" class="element" name="seat" value="15,2E" onclick="displaySeatDetails();">2E<br>
						<input type="radio" class="element" name="seat" value="15,3E" onclick="displaySeatDetails();">3E<br>
						<input type="radio" class="element" name="seat" value="15,4E" onclick="displaySeatDetails();">4E<br>
						<input type="radio" class="element" name="seat" value="15,5E" onclick="displaySeatDetails();">5E<br>
						<input type="radio" class="element" name="seat" value="15,6E" onclick="displaySeatDetails();">6E<br>
						<input type="radio" class="element" name="seat" value="15,7E" onclick="displaySeatDetails();">7E<br>
						<input type="radio" class="element" name="seat" value="15,8E" onclick="displaySeatDetails();">8E<br>
						<input type="radio" class="element" name="seat" value="15,9E" onclick="displaySeatDetails();">9E<br>
						<input type="radio" class="element" name="seat" value="15,10E" onclick="displaySeatDetails();">10E<br>
						<input type="radio" class="element" name="seat" value="15,11E" onclick="displaySeatDetails();">11E<br>
						<input type="radio" class="element" name="seat" value="15,12E" onclick="displaySeatDetails();">12E<br>
						<input type="radio" class="element" name="seat" value="15,13E" onclick="displaySeatDetails();">13E<br>
						<input type="radio" class="element" name="seat" value="15,14E" onclick="displaySeatDetails();">14E<br>
						<input type="radio" class="element" name="seat" value="15,15E" onclick="displaySeatDetails();">15E<br>
					</td>
				</table>
			
		<div class="columns" style="float:left;"><h3>Seat details</h3><br>
			Seat name:
			<p id="seat_name"> 
				<script type="text/javascript" src="seats.js"></script>
			</p>
			 Seat price: 
			<p id="seat_price">
				<script type="text/javascript" src="seats.js"></script>
			</p>
		</div>
		
		<input type="submit" value="Add To Cart" name="submit" style="margin-bottom:20px;">
		<?php
		if (isset($_GET['submit'])) {
			echo "test";
			if(isset($_GET['seat'])){
				echo "test2";
				$raw_arr = $_GET['seat'];
				$arr = explode(",",$raw_arr);
				$price = $arr[0];
				$name = $arr[1];
				$_SESSION['price'][] = $price;
				$_SESSION['name'][] = $name;
				echo $price;
				echo $name;
			}
		}
		?>

			</form>
			</div>
		</div>
	</body>
</html>
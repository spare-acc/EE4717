<?php  
session_start();
if (!isset($_SESSION['price'])){
	$_SESSION['price'] = array();
}
if (!isset($_SESSION['name'])){
	$_SESSION['name'] = array();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['price']);
	session_destroy();
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['name']);
	session_destroy();
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SPORTS UNLIMITED</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/breadcrumb.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav">
  <img src="soccer.jpg" width="100px" height="60px" align="left">
  <a href="index.html">Home</a>
  <a href="events.html">Events</a>
  <a href="about.html">About</a>
  <a href="contact.html">Contact Us</a>
  <a href="news.html">NewsRoom</a>
  <input type="text" placeholder="Search...">
</div>
<div>
<ul class="breadcrumb">
  <li><a href="events.html">Events</a></li>
  <li><a href="soccer.html">Soccer</a></li>
  <li><a href="seating.html">Seating Plan</a></li>
  <li><a href="payment.html">Payment</a></li>
</ul>
</div>

<h2>Payment</h2>
<div class="row">
  <div class="col-75">

	<div class="col-25">
		<div class="container4">
		  <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
		 <table border="1">
			<thead>
			<tr>
				<th>Seat</th>
				<th>Price</th>
			</tr>
			</thead>
			<tbody>

		<?php
		$total = 0;
		for ($i=0; $i < count($_SESSION['price']); $i++){
			$price = $_SESSION['price'][$i];
			$name = $_SESSION['name'][$i];
			echo "<tr>";
			echo "<td>" .$name. "</td>";
			echo "<td>$" .number_format($price,2). "</td>";
			echo "</tr>";
			$total = $total + $price;
		}

		?>

			</tbody>
			<tfoot>
			<tr>
				<th align='right'>Total:</th><br>
				<th align='right'>$<?php echo number_format($total, 2); ?>
				</th>
			</tr>
			</tfoot>
		</table>
		<p><a href="event_booking.php">Continue Shopping</a> or
		<a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a></p>
		</div>
	</div>
	
    <div class="container4">
      <form action="confirmation.php">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn" a href="confirmation_page.php">
      </form>
    </div>
  
</div>
</div>
<footer>
<small><i>Copyright &copy; 2019 SPORTS UNLIMITED PTE LTD
</i></small><br>​
<small><i><a href="sports@unlimited.com.sg">​
<a href="mailto:me@sports@unlimited.com.sg">sports@unlimited.com.sg</a>​
<i><small>​
</footer>
</div>
</body>
</html>
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

<html>
<head>
<title>Payment</title>
</head>
<body>
<h1>Your Seats</h1>


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
<p><a href="event_booking_simplified.php">Continue Shopping</a> or
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a></p>

</body>
</html>
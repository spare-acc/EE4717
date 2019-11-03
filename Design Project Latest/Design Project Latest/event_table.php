<?php
  $servername = "localhost";
  $username = "f31im";
  $password = "f31im";
  $dbname = "f31im";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  // Check connection
  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }

  $sql = "SELECT * FROM new_record";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table id='new_record'>";
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $events = $row['events'];
      $desc = $row['description'];
      $price = $row['price'];

      echo "<tr>";
      echo "    <form name='form' action='events.php' method='post'>"; // POST to product_update.php
      echo "      <input type='hidden' value='".$id."' name='id' />"; // send item ID

      if ($name) { // displays only if endless price is not NULL
        echo "$row[id]. $row[events]"
        echo "<span class='eventDisplay'>".$event."</span>";
      }
      if ($decription) { // displays only if single price is not NULL
		echo "$row[id]. $row[description]"
        echo "<span class='Display'>".$single."</span>"; // single price
        echo " <input name='single' value='".$single."' class='priceInput' type='number' min='0.01' step='0.01'>"; // single input
      }
      if ($price) { // displays only if double price is not NULL
        $price = number_format($dbl, 2, '.', ''); // 2 decimal places
        echo " Price: $";
        echo "<span class='priceDisplay'>".$price."</span>"; // double price
        echo " <input name='dbl' value='".$price."' class='priceInput' type='number' min='0.01' step='0.01'>"; // double input
      }

      echo "      <button class='priceInput' type='submit'>";
      echo "        Update";
      echo "      </button>";
      echo "    </form>";
      echo "  </td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "No events currently";
  }

  mysqli_close($conn);
?>
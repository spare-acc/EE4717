<?php
  // var_dump($_POST);

  if (!empty($_POST)) { // check if there is POST data. If not, do nothing.

    // Create connection
    $conn = mysqli_connect('localhost', 'f33ee', 'f33ee', 'f33ee');
    
    // Check connection
    if (!$conn) {
      die("Connection failed: ".mysqli_connect_error());
    }

    $sql = "UPDATE events SET";
    if (isset($_POST['justjava'])) {
      $sql .= " justjava=".$_POST['justjava'].",";
    }
    if (isset($_POST['single'])) {
      $sql .= " single=".$_POST['single'].",";
    }
    if (isset($_POST['dbl'])) {
      $sql .= " dbl=".$_POST['dbl'].",";
    }
    $sql = rtrim($sql, ','); // remove comma from end of $sql
    $sql .= " WHERE ID=" . $_POST['id'];
    
    echo "<script>";
    echo "  console.log('".$sql."');"; // to check $sql
    
    if (mysqli_query($conn, $sql)) {
      echo "alert('Events updated successfully');";
    } else {
      echo "alert('Error occurred: ".mysqli_error($conn)."');";
    }
    echo "</script>";

    mysqli_close($conn);
  }
?>
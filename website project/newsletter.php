<?php 
$user = "user_name";  
$password = "password";  
$host = "host_name";  
$dbase = "database_name";  
$table = "table_name";  
 
$first_name= $_POST['firstname']; 
$last_name= $_POST['lastname']; 
$email= $_POST['email']; 
  
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table  ". "VALUES ('$first_name', '$last_name', '$email')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have successfully subscribe to our Newsletter.' . '<br>'; 
 
mysqli_close($dbc); 
 
?> 
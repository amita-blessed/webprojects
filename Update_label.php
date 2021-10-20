<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expense_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$item =  $_GET["label_name"];
$label_id = $_GET["label_id"];
$sql = "UPDATE  label_tab SET label_name='$item' WHERE label_id = '$label_id' ";

if ($conn->query($sql) === TRUE) {
	
  echo " record updated successfully";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 


$conn->close();
?>

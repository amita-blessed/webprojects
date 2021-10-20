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
$item = $_GET['selectedValue'];
$date = $_GET['date'];
$amt =  $_GET['amount'];
echo $date;
$sql = "INSERT INTO expense_tab(`expense_date`, `label_name`, `amount`, `status`) VALUES ('$date','$item','$amt','paid')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 






$conn->close();
?>
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
$labname=$_GET["label_name"];
echo $labname;
// sql to delete a record
 $sql = "DELETE FROM `label_tab` WHERE `label_name` ='$labname'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} 
else 
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

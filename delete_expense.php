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
	
$exp_id=$_GET["exp_id"];

// sql to delete a record
$sql = "DELETE FROM expense_tab WHERE exp_id= $exp_id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} 
else 
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

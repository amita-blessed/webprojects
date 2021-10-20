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


$sql = "SELECT * FROM label_tab";
$array_result=[];
$exec=$conn->query($sql);

if ($exec->num_rows > 0) {
  // output data of each row
	//foreach($exec-> as $row)
	 while($row = $exec->fetch_assoc()) {
     	
			array_push($array_result,$row);
		}
	
	header('Content-type: application/json');
	echo json_encode($array_result);
}
else
{
	echo $return = "<h4> NO RECORDS FOUND</h4>";
}







$conn->close();
?>

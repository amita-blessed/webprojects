<?php

//$conn = new PDO("mysql:host=localhost;dbname=testing", "root", "");
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
if(isset($_POST["action"]))
{
	
	if($_POST["action"] == 'fetch')
	{
		$query = " SELECT label_name, SUM(amount) AS S1 FROM expense_tab GROUP BY label_name
		";

		$result = $conn->query($query);
		
		
		$data = array();
		$row =  $result -> fetch_array(MYSQLI_ASSOC);

			
    
		foreach($result as $row)
		{
			$label_name = $row[ "label_name" ];
			$S1 = $row[ "S1" ];
			$data[] = array(
				"label_name"	=>	$label_name,
				"S1"			=>	$S1,
				"color"		=>	'#' . rand(100000, 999999) . ''
			);
			//$result1 = $result->fetchAll(PDO::FETCH_ASSOC);
			//print_r($result1);
			//
				
		}

		echo json_encode($data);
	}
}
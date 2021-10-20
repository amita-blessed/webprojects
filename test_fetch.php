<?php

//data.php

//$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");$servername = "localhost";
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
				if($_POST["action"] == 'listfetch')
				{
					$sql = "SELECT * FROM label_tab";

				$array_result=[];
				$exec=$conn->query($sql);

				if ($exec->num_rows > 0) {
		  
					while($row = $exec->fetch_assoc()) {
				
							array_push($array_result,$row["label_name"]);
					}
			
				header('Content-type: application/json');
				echo json_encode($array_result);
				}
				else
				{
					echo $return = "<h4> NO RECORDS FOUND</h4>";
				}

			
			}

			if($_POST["action"] == 'fetch')
			{
				$label_name=$_POST['selectedValue'];
				//echo $label_name;	
				$sql = "SELECT  'label_name', SUM('amount') AS Total FROM expense_tab GROUP BY 'label_name'";
				
				$result = $conn->query($sql);
				$tot=0;
				$data = [];
				if ($result->num_rows > 0) 
				{													
									
									foreach($result as $row)
									{
										if ($row["label_name"]==$label_name)
										{
											array_push($data,$row["Total"]);
										}
										echo $row["Total"];
									}
									
											//array_push($data,$result[label_name]);								}
											//array_push($data,$row[Total]);
									
												
									echo json_encode($data);
									
				}
				else
				{
					echo $return = "<h4> NO RECORDS FOUND</h4>";
				}
			}
		}


		$conn->close();

?>
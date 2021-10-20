<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	</head>
	<body>
		<div class="container">
			<h2 class="text-center mt-4 mb-3"></a></h2>

			<div class="card">
				<div class="card-header">Expense Summary Visual</div>
				<div class="card-body">
						<button type="submit" class="btn btn-primary" name="submit_home" onclick="location.href='index_1.html';">
					Home
				</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="card mt-4">
						<div class="card-header">Pie Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</body>
</html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>



      
	
$(document).ready(function(){
	
		drawChart();

     
	function drawChart() {
		$.ajax({
          url: "fetchdb.php",
          dataType: "json",
		  method:"POST",
		  data:{action:'fetch',},
          async: false,
		  success:function(data)
		  {           
					console.log(data);
					
					var label_name = [];
					var S1 = [];
					var color = [];

					for(var count = 0; count < data.length; count++)
					{
						label_name.push(data[count].label_name);
						S1.push(data[count].S1);
						color.push(data[count].color);
					}

					var chart_data = {
						labels:label_name,
						datasets:[
							{
								label:'Expenses',
								backgroundColor:color,
								color:'#fff',
								data:S1
							}
						]
					};

					var options = {
						responsive:true,
						scales:{
							yAxes:[{
								ticks:{
									min:0
								}
							}]
						}
					};

					var group_chart1 = $('#pie_chart');

					var graph1 = new Chart(group_chart1, {
						type:"pie",
						data:chart_data
					});

         
	
				}
		})
		}
		});
		
        
      



</script>
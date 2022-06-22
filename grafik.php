<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	
 
 
 
	<?php 
	include 'koneksi.php';
	?>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Microsoft Windows 10 Pro", "Microsoft Windows 7 Professional", "Microsoft Windows 8 Pro", "Microsoft Windows Server 2012 R2 Standard"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_10pro = mysqli_query($db,"select * from tb_asset where OS_name='Microsoft Windows 10 Pro'");
					echo mysqli_num_rows($jumlah_10pro);
					?>, 
					<?php 
					$jumlah_7pro = mysqli_query($db,"select * from tb_asset where OS_name='Microsoft Windows 7 Professional'");
					echo mysqli_num_rows($jumlah_7pro);
					?>, 
					<?php 
					$jumlah_8pro = mysqli_query($db,"select * from tb_asset where OS_name='Microsoft Windows 8 Pro'");
					echo mysqli_num_rows($jumlah_8pro);
					?>, 
					<?php 
					$jumlah_2012 = mysqli_query($db,"select * from tb_asset where OS_name='Microsoft Windows Server 2012 R2 Standard'");
					echo mysqli_num_rows($jumlah_2012);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>
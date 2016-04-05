<?php
$ledenArray = array (
		"De spartelkuiken" => "25",
		"De waterbuffels" => "32",
		"Plonsmderin" => "11",
		"Bommetje" => "23" 
)
?>
<html>
<head>
<title>Zwemclubs</title>
<style>
			table {
				border-collapse: collapse;
				margin: 25vh auto;
				font: 2vw "Arial";
			}
			td {
				padding: 10px 20px;
				border: 1px solid black;
			}
			img {
				width: 25px;
				height: 25px;
				margin: 0px 2px;
			}
		</style>
</head>
<body>
	<table>
		<?php 
		$count = 0;
			foreach($ledenArray as $naam => $aantal) {
				echo "<tr>";
					echo "<td>$naam</td>";
					echo "<td>";
						for($i = 0; $i < ($aantal-($aantal%5)) / 5; $i++) {
							echo "<img src='rwerewrqwwqwqweqewqeq.png'>";
						}
					echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>

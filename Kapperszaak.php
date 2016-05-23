<!DOCTYPE html>

<html>
	<head>
		
		<title>Kapperszaak Sanders</title>
	</head>
	
	<body>
		<?php
			$kappersagenda = array(
					"9:00" => $_POST['array'][0],
					"9:15" => $_POST['array'][1],
					"9:30" => $_POST['array'][2],
					"9:45" => $_POST['array'][3],
					"10:00" => $_POST['array'][4],
					"10:15" => $_POST['array'][5],
					"10:30" => $_POST['array'][6],
					"10:45" => $_POST['array'][7]
			);
			if ($_POST['time'] != null) {
				$kappersagenda[$_POST['time']] = $_POST['name'];
			}
		?>
		
		<!-- FORMULIER -->
		<h1>Maak een afspraak:</h1>
		<form action="Kapperszaak.php" method="post">
			De volgende momenten zijn nog beschikbaar:
			
			<select name="time">
				<?php
					foreach($kappersagenda as $tijdstip => $klantnaam) {
						if($klantnaam == "") {
							print("<option>".$tijdstip."</option>");
						}
					}
				?>
			</select>
			<br>
			<input type="text" name="name" placeholder="Naam">
			<br>
			<button type="submit" name="submit">Submit</button>
			<?php
				foreach($kappersagenda as $klantnaam) {
					echo "<input type='hidden' name='array[]' value='".$klantnaam."'>";
				}
			?>
		</form>
		
		<!-- OVERZICHT -->
		<?php
			echo("<table>");
				echo "<tr><th>Tijdstip</th><th>Klantnaam</th></tr>";
				foreach($kappersagenda as $tijd => $afspraak) {
					if ($afspraak == "") {
						echo "<tr><td>".$tijd."</td></tr>";
					}
					else {
						echo("<tr><td>".$tijd."</td><td>".$afspraak."<td></tr>");
					}
				}
			echo("</table>");
		?>
	</body>
</html>
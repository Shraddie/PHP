<?php
include("Header.php");
	?> 
	
	Hier is de PHP code     Dit staat in Webpagina.php
	
	<?php
include("Includefuncties.php");
include("Footer.php");

	for ($i = 0; $i < 12; $i++) {
		foreach(retour() as $muziek) {
			echo "<br>";
			foreach($muziek as $qwerty) { 
				echo $qwerty."<br>";
			}
		}
	}
?>
<html>
<table>



</table>
</html>

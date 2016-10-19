<?php
	session_start();
	print_r($_SESSION);
	if ($_SESSION["rol"] != "Administrator") {
		echo "Je hebt onvoldoende rechten voor deze pagina";
	}
?>
<html>
<body>
	<h1>adminpage yo</h1>
</body>
</html>

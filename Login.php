<?php
	
	$combo = array(
		"piet@worldonline.nl" => "doetje123",
		"klaas@carpets.nl" => "snoepje777",
		"truushendriks@wegweg.nl" => "arkiearkie201"
	);
	
	if ($combo[$_POST["email"]] == $_POST["password"]) {
		echo "Welkom";
	}
	else if (isset($_POST["submit"])) {
		echo "Sorry, geen toegang!";
	}
	
	
?>
<html>
<body>
	<form method="POST">
	<input placeholder="E-mail" name="email">
	<input placeholder="Wachtwoord" type="password" name="password">
	<input type="submit" name="submit">
	</form>
</body>
</html>

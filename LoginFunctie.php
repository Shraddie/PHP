<?php
	
	$combo = array(
			"piet@worldonline.nl" => "doetje123",
			"klaas@carpets.nl" => "snoepje777",
			"truushendriks@wegweg.nl" => "arkiearkie201"
	);
	
	if (isset($_POST["submit"])) {
		if (loginFunction($combo, $_POST["email"], $_POST["password"])) {
			echo "Welkom";
		}
		else {
			echo "Sorry, geen toegang!";
		}
	}
	
	function loginFunction($combo, $email, $password) {
		if ($combo[$email] == $password) {
			return true;
		}
		else {
			return false;
		}
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

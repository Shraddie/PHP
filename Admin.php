<?php
	session_start();
	
	
	$combo = array(
		"piet@worldonline.nl" => array("pass" => "1234", "rol" => "Administrator"),
		"klaas@carpets.nl" => array("pass" => "1235", "rol" => "Gebruiker"),
		"truushendriks@wegweg.nl" => array("pass" => "1345", "rol" => "Administrator")
	);
	
if (isset($_POST["submit"])) {
		if (loginFunction($combo, $_POST["email"], $_POST["password"])) {
			echo "Welkom ".$_POST["email"];
			echo "<br>".$combo[$_POST["email"]]["rol"];
		}
		else {
			echo "Sorry, geen toegang!";
		}
	}
	
	if(isset($_GET["loguit"])) {
		$_SESSION = array();
		session_destroy();
	}
	
	function loginFunction($combo, $email, $password) {
		if (array_key_exists($email,$combo) && $combo[$email]["pass"] == $password) {
			$_SESSION["gebruiker"] = $email;
			$_SESSION["rol"] = $combo[$email]["rol"];
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

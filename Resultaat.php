<?php

if ($_POST["inlognaam"] != "" && $_POST["adres"] != "" && $_POST["email"] != "" && $_POST["wachtwoord"] != "") {	
		
	echo "Naam: ".$_POST["inlognaam"];
	echo "<br> Adres: ".$_POST["adres"];
	echo "<br> E-mail: ".$_POST["email"];
	echo "<br> Wachtwoord: ";

	for ($i = 0; $i < iconv_strlen($_POST["wachtwoord"]); $i++) {
		echo "&bull;";
		}
	}
	else  {
		echo "Vul alles in";
	}
	?>


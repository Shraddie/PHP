<html>
<head><style>*{text-align:center;}</style></head>
<form method="post">
<h1>Celsius naar Fahrenheit</h1>
<input type="text" name="tempinput">
<?php
	if (isset ($_POST["tempinput"])) {
		if(is_numeric($_POST["tempinput"])) {
		temp($_POST["tempinput"]);
			
		}
		
	} 
	function temp($celsius) {
		$fahrenheit = $celsius * 1.8 + 32;
		echo " ".$fahrenheit;
	}
	
?>
<br><br><br><br><br>
<h1>Deelbaar door 3</h1>
<input type="number" name="input">
<?php
	function delen($input) { 
		
		if($input % 3 == 0) {
			echo "$input is deelbaar door 3";
		} else {
			echo "$input is niet deelbaar door 3";
		}
	}
	
	$input = $_POST["input"];
	if (isset ($_POST["input"])) {
		
		if(is_numeric($input)) {
			delen($input);
		}
	}
?>
<br><br><br><br><br>
<h1>Reverse string</h1>
<input type="text" name="reverseinput">
<?php 
	function reverse($reverse) {
		return strrev($reverse);
	}
	
	if (isset ($_POST["reverseinput"])) {
		
	echo reverse ($_POST["reverseinput"]);
	
	}
?>

<input type="submit" style="display: none;">
</form>
</html>
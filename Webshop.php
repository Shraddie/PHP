<html>

<style>
* {
	font-family: "Cambria";
}
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    black;
}
input {
	background-color: red;
	border-color: red;
	color: black;
}

select {
	color: black;
	background-color: red;
	border-color: red;
}

body {
	background-color: black;
}

div.autokader {
	float: left;
	margin: 1em;
	width: 220px;
	height: 120px;
	border: 1px solid black;
	border-radius: 25px;
	overflow: hidden;
	font-weight: bold;
	text-decoration: none;
	position: relative;
	background: -webkit-linear-gradient(right, rgba(127, 127, 127, 0),
		rgba(127, 127, 127, 1)); /* For Safari 5.1 to 6.0 */
	background: -o-linear-gradient(left, rgba(127, 127, 127, 0),
		rgba(127, 127, 127, 1)); /* For Opera 11.1 to 12.0 */
	background: -moz-linear-gradient(left, rgba(127, 127, 127, 0),
		rgba(127, 127, 127, 1)); /* For Firefox 3.6 to 15 */
	background: linear-gradient(to left, rgba(127, 127, 127, 0),
		rgba(127, 127, 127, 1)); /* Standard syntax (must be last) */
}

div.autokader img {
	height: 80px;
	width: 120px;
	margin: 0;
	position: absolute;
	bottom: 0;
	left: 0;
}

div.autokader p.merktype {
	color: black;
	background-color: red;
	text-align: center;
	margin: 0px;
}

div.autokader p.prijs {
	color: red;
	text-align: right;
	margin-right: 1em;
}

div#autoselectie {
	max-width: 1200px;
}
</style>
</form>
<body>	

<form>
<select name="merk">
<option value="alle">Alle merken</option>
<option value="Ford">Ford</option>
<option value="Opel">Opel</option>
<option value="Subaru">Subaru</option>
<option value="Mercedes">Mercedes</option>
<option value="Ferrari">Ferrari</option>
<option value="Lotus">Lotus</option>
<option value="Citroen">Citroen</option>
<option value="Volvo">Volvo</option>
<option value="Mini">Mini Cooper</option>
</select>
<input type="text" placeholder="Minimum prijs" name="min">
<input type="text" placeholder="Maximum prijs" name="max"> 
<input type="submit" value="OK" name="submit">
<br>
</form>

</body>
</html>
<?php
	class Auto {
		
		private $merk;
		private $type;
		private $prijs;
		private $fotoURL;
		
		public function __construct($merk, $type, $prijs, $fotoURL) {
			$this->merk = $merk;
			$this->type = $type;
			$this->prijs = $prijs;
			$this->fotoURL = $fotoURL;
		}
		
		public function getMerk() {
			return $this->merk;
		}
		
		public function getType() {
			return $this->type;
		}
		
		public function getPrijs() {
			return $this->prijs;
		}
		
		public function getFotoURL() {
			return $this->fotoURL;
		}
	
		public function setMerk($merk) {
			$this->merk = $merk;
		}
		public function setType($type) {
			$this->type = $type;
		}
		public function setPrijs($prijs) {
			$this->prijs = $prijs;
		}
		public function setFotoURL($fotoURL) {
			$this->fotoURL = $fotoURL;
		}
		
	}
	
	$lijst = array(
		new Auto("Ford", "Fiesta", 23.999, "img/fordfiesta.jpg"),
		new Auto("Ford", "Focus", 18.995, "img/fordfocus.jpg"),
		new Auto("Opel", "Astra", 14.895, "img/opelastra.jpg"),
		new Auto("Opel", "Insignia", 65.450, "img/opelinsignia.jpg"),
		new Auto("Subaru", "Forester", 34.750, "img/subaruforester.jpg"),
		new Auto("Subaru", "Impreza", 28.345, "img/subaruimpreza.jpg"),
		new Auto("Mercedes", "E 63", 110.995, "img/mercedede63.png"),
		new Auto("Mercedes", "CLA 45", 190.780, "img/mercedescla45.jpg"),
		new Auto("Mercedes", "E 230", 1.000, "img/mercedese230.jpg"),
		new Auto("Mercedes", "C 250", 599, "img/mercedesc250.jpg"),
		new Auto("Ferrari", "612 GTO", 350.500, "img/ferrari612.jpg"),
		new Auto("Ferrari", "California", 210.780, "img/ferraricalifornia.jpg"),
		new Auto("Ferrari", "458", 280.775, "img/ferrari458.jpg"),
		new Auto("Lotus", "Elise CR", 48.591, "img/lotuselisecr.jpg"),
		new Auto("Lotus", "Elise S CR", 60.079, "img/lotuselisescr.jpg"),
		new Auto("Citroen", "2CV", 459, "img/citroen2cv.jpg"),
		new Auto("Volvo", "V40", 1.250, "img/volvov40.jpg"),
		new Auto("Mini", "Cooper", 34.495, "img/minicooper.jpg")
	);
	
	foreach ($lijst as $auto) {
		if (
				!isset($_GET["submit"])
				|| (
						isset($_GET["submit"])
						&& ($auto->getPrijs() >= $_GET["min"] || $_GET["min"] == "")
						&& ($auto->getPrijs() <= $_GET["max"] || $_GET["max"] == "")
						&& ($auto->getMerk() == $_GET["merk"] || $_GET["merk"] == "alle")
						)
				) {
		echo "<div class='autokader'>";
		echo "<p class='merktype'>".$auto->getMerk()." ".$auto->getType()."</p><br>";
		echo "<p class='prijs'> € ".$auto->getPrijs().",-</p><br>";
		echo "<img src='".$auto->getFotoURL()."'><br><br>";
		echo "</div>";
			}
	}
?>
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
<body>	

<form method="post">
<select name="merk">
<option value="alle">Alle merken</option>
<?php
	$lijst = array(
			new Auto("Ford", "Fiesta", 23999, "img/fordfiesta.jpg"),
			new Auto("Ford", "Focus", 18995, "img/fordfocus.jpg"),
			new Auto("Opel", "Astra", 14895, "img/opelastra.jpg"),
			new Auto("Opel", "Insignia", 65450, "img/opelinsignia.jpg"),
			new Auto("Subaru", "Forester", 34750, "img/subaruforester.jpg"),
			new Auto("Subaru", "Impreza", 28345, "img/subaruimpreza.jpg"),
			new Auto("Mercedes", "E 63", 110995, "img/mercedede63.png"),
			new Auto("Mercedes", "CLA 45", 190780, "img/mercedescla45.jpg"),
			new Auto("Mercedes", "E 230", 1000, "img/mercedese230.jpg"),
			new Auto("Mercedes", "C 250", 599, "img/mercedesc250.jpg"),
			new Auto("Ferrari", "612 GTO", 350500, "img/ferrari612.jpg"),
			new Auto("Ferrari", "California", 210780, "img/ferraricalifornia.jpg"),
			new Auto("Ferrari", "458", 280775, "img/ferrari458.jpg"),
			new Auto("Lotus", "Elise CR", 48591, "img/lotuselisecr.jpg"),
			new Auto("Lotus", "Elise S CR", 60079, "img/lotuselisescr.jpg"),
			new Auto("Citroen", "2CV", 459, "img/citroen2cv.jpg"),
			new Auto("Volvo", "V40", 1250, "img/volvov40.jpg"),
			new Auto("Mini", "Cooper", 34495, "img/minicooper.jpg")
	);
				$merken = array();
				foreach ($lijst as $auto) {
					if (!in_array($auto->getMerk(), $merken)) {
						array_push($merken, $auto->getMerk());
					}
				}
				foreach ($merken as $merk) {
					echo "<option value=".$merk.">".$merk."</option>";
				}
			?>
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
	
	
	if(!isset($_POST["submit"])) {
		foreach ($lijst as $auto) {
			
			echo "<div class='autokader'>";
			echo "<p class='merktype'>".$auto->getMerk()." ".$auto->getType()."</p>";
			echo "<p class='prijs'> � ".$auto->getPrijs().",-</p>";
			echo "<img src='".$auto->getFotoURL()."'>";
			echo "</div>";
		}
	} else {
		foreach ($lijst as $auto) {
			if($_POST["merk"] == "alle" || $_POST["merk"] == $auto->getMerk()) {
				if(($_POST["min"] <= $auto->getPrijs() || $_POST["min"] == "") &&
						($_POST["max"] >= $auto->getPrijs() || $_POST["max"] == "")){
					echo "<div class='autokader'>";
					echo "<p class='merktype'>".$auto->getMerk()." ".$auto->getType()."</p>";
					echo "<p class='prijs'> � ".$auto->getPrijs().",-</p>";
					echo "<img src='".$auto->getFotoURL()."'>";
					echo "</div>";
				}
			}
		}
	}
?>
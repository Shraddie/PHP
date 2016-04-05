<?php
/*	
	Er wordt een busreis georganiseerd. De reis kost 10 euro. 
	Ouderen boven de 65 jaar krijgen 50% korting. 
	Kinderen van 12 jaar en jonger krijgen eveneens 50% korting. 
	Kinderen onder de 3 jaar mogen gratis mee.
	Schrijf een programma met (minstens) 1 variabele:
	$leeftijd
	Gebruik een IF/ELSE constructie om het programma weer te laten geven hoeveel er betaald moet worden.
	Test het programma met de volgende leeftijden:
	10 = 5 euro
	2 = 0 euro
	65 = 10 euro
	12 = 5 euro
*/

$leeftijd = 0;
$rijskosten = 10;
$gratis = 0;
echo "<br> De reiskosten zijn:" . $reiskosten;
echo "$ zonder korting,";
echo "<br>";
for ($i = 0; $i < 9; $i++) {
if ($leeftijd <= 3) {
		echo "<br>u bent: ". $leeftijd; echo"jaar. De reiskosten zijn " . $gratis;
	echo "$";
} else if ($leeftijd  <= 12) {
		echo "<br>u bent: ". $leeftijd; echo"jaar. De reiskosten zijn " . $reiskosten/2;
	echo "$";
	} else if ($leeftijd  > 65) {
	
		echo "<br>u bent: ". $leeftijd; echo"jaar. De reiskosten zijn " . $reiskosten/2;
		echo "$";
	
} else {
		echo "<br>u bent: ". $leeftijd; echo"jaar. De reiskosten zijn " . $reiskosten;
		echo "$";
}
$leeftijd += 5;
}
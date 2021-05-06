<?php
	function teller() {
		for ($i=100; $i >= 0; $i--) {
			return $i;
		}
	}
	function calcBMI($gewicht, $lengte) {
		$BMI = round(($gewicht / (pow($lengte, 2))), 1);
		return $BMI;
	}
	function analiseBMI($BMI) {
		if ($BMI <= 15) {
			return "levensbedreigend ondergewicht";
		} elseif ($BMI > 15 && $BMI < 19) {
			return "ondergewicht";
		} elseif ($BMI >= 19 && $BMI <= 25) {
			return "normaal gewicht";
		} elseif ($BMI > 25 && $BMI < 30) {
			return "overgewicht";
		} elseif ($BMI >= 30 && $BMI <= 35) {
			return "obesitas";
		} else {
			return "morbide obesitas";
		}
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['BMI'])) {
		$input_gewicht = $_POST['gewicht'];
		$input_lengte = $_POST['lengte'];
		$BMI = calcBMI($input_gewicht, $input_lengte);
		// $count = teller();
		// echo "<p>Verwerking: " . teller() . "</p>";
		// echo "<p>Uw BMI: _____ </P>";
		// echo "<p>Uw BMI is een mogelijk indicatie van: _____ </p>";
		// echo "<br>";
		// if ($count == 0) {
			echo "<p>Verwerking: Klaar.</p>";
			echo "<p>Uw BMI: " . $BMI . "</P>";
			echo "<p>Uw BMI is een mogelijk indicatie van: " . analiseBMI($BMI) . "</p>";
			echo "<br>";
		// }
	} else {
		echo "<p>Uw BMI: _____ </P>";
		echo "<p>Uw BMI is een mogelijk indicatie van: _____ </p>";
		echo "<br>";
	}
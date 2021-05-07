<?php
	function teller() {
		for ($i=100; $i >= 0; $i--) {
			return $i;
		}
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
		$input_naam = $_POST['naam'];
		$input_gewicht = $_POST['gewicht'];
		$input_lengte = $_POST['lengte'];
		// new user object
		$new_user = new User_BMI($input_naam, $input_gewicht, $input_lengte);
		$BMI = $new_user->calcBMI();
		
		echo "<p>Verwerking: Klaar.</p>";
		echo "<p>Welkom: " . $new_user->naam;
		echo "<p>Uw BMI: " . $BMI . "</P>";
		echo "<p>Uw BMI is een mogelijk indicatie van: " . analiseBMI($BMI) . "</p>";
		echo "<br>";
	} else {
		echo "<p>Uw BMI: _____ </P>";
		echo "<p>Uw BMI is een mogelijk indicatie van: _____ </p>";
		echo "<br>";
	}

	/**
	 * class: BMI user
	 */
	class User_BMI {
		public $naam;
		public $gewicht;
		public $lengte;

		function __construct($naam, $gewicht, $lengte) {
			$this->naam = $naam;
			$this->gewicht = $gewicht;
			$this->lengte = $lengte;
		}
		// Method
		function calcBMI() {
			$BMI = round(($this->gewicht / (pow($this->lengte, 2))), 1);
			return $BMI;
		}
	}
?>
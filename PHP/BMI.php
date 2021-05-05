<?php
	function calcBMI($gewicht, $lengte) {
		$BMI = $gewicht / (pow($lengte, 2));
		return $BMI;
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['BMI'])) {
		$input_gewicht = $_POST['gewicht'];
		$input_lengte = $_POST['lengte'];
		echo "<p>Uw BMI: " . calcBMI($input_gewicht, $input_lengte) . "</P>";
	} else {
		echo "<p>Uw BMI: _____ </P>";
	}
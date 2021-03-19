<?php
	

	function ageInSec($user_Birthdate) {
		$now = time();
		$birthTime = strtotime($user_Birthdate);

		$calc->age = $now - $birthTime;
		$calc->onemillion = ($birthTime + 1000000);

		$calcJSON = json_encode($calc);
		return $calcJSON;
		
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		define('BIRTHDATE_CONST',  $_POST['birthdate']);

		if (empty(BIRTHDATE_CONST)) {
			echo " Please select a date";
		} else {
			echo ageInSec(BIRTHDATE_CONST);
		}
	}
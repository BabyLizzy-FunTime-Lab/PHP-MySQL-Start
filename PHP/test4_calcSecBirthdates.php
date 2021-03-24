<?php
	function timeMachine($birthTime, $mil_or_bil, $multiplyer){
		$mil = 1000000;
		$bil = 1000000000;

		if ($mil_or_bil === "mil") {
			return $birthTime + ($mil * $multiplyer); 
		} elseif ($mil_or_bil === "bil") {
			return $birthTime + ($bil * $multiplyer); 
		}		
	}

	function dateCalc($user_Birthdate) {
		$now = time();
		$birthTime = strtotime($user_Birthdate);

		$calc = array(
			'age'=>$now - $birthTime, 
			'onemillion'=> date("l F jS Y", timeMachine($birthTime, "mil", 1)),
			'half_billion'=>date("l F jS Y", timeMachine($birthTime, "bil", 0.5)),
			'onebillion'=>date("l F jS Y", timeMachine($birthTime, "bil", 1)),
			'onehalf_billion'=>date("l F jS Y", timeMachine($birthTime, "bil", 1.5)),
			'twobillion'=>date("l F jS Y", timeMachine($birthTime, "bil", 2)),
			'twohalf_billion'=>date("l F jS Y", timeMachine($birthTime, "bil", 2.5)),
			'treebillion'=>date("l F jS Y", timeMachine($birthTime, "bil", 3))
		);

		$calcJSON = json_encode($calc);
		return $calcJSON;
		
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		define('BIRTHDATE_CONST',  $_POST['birthdate']);

		if (empty(BIRTHDATE_CONST)) {
			echo " Please select a date";
		} else {
			echo dateCalc(BIRTHDATE_CONST);
		}
	}
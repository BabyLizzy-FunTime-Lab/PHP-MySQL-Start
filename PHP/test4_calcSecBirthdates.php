<?php
	function timeMachine($birthTime, $mil_or_bil, $multiplyer){
		$mil = 1000000;
		$bil = 1000000000;

		if ($mil_or_bil === "mil") {
			$age_years = ($mil * $multiplyer) / 60 / 60 / 24 / 365;
			$date = date("l F jS Y", $birthTime + ($mil * $multiplyer));
			return $container = array('date' => $date, 'age_years' => number_format($age_years,2,",",".")); 
		} elseif ($mil_or_bil === "bil") {
			$age_years = ($bil * $multiplyer) / 60 / 60 / 24 / 365;
			$date = date("l F jS Y", $birthTime + ($bil * $multiplyer));
			return $container = array('date' => $date, 'age_years' => number_format($age_years,2,",",".")); 
		}		
	}

	function dateCalc($user_Birthdate) {
		$now = time();
		$birthTime = strtotime($user_Birthdate);

		$calc = array(
			'birthTime'=>$birthTime,
			'age'=>$now - $birthTime, 
			'onemillion'=> timeMachine($birthTime, "mil", 1),
			'half_billion'=> timeMachine($birthTime, "bil", 0.5),
			'onebillion'=> timeMachine($birthTime, "bil", 1),
			'onehalf_billion'=> timeMachine($birthTime, "bil", 1.5),
			'twobillion'=> timeMachine($birthTime, "bil", 2),
			'twohalf_billion'=> timeMachine($birthTime, "bil", 2.5),
			'treebillion'=> timeMachine($birthTime, "bil", 3)
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
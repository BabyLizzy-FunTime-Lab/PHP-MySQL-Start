<?php
	echo "<h3>printf()</h3>";
	printf("Most guitars have %d strings.<br>", 6);
	$pi = pi();
	printf("The simpel number pi = %.2f<br>", $pi);
	printf("But pi is actually much more complex = %.12f<br>", $pi);
	echo "<h3>Date and Time</h3>" . 
		"The current time in seconds. Starting on 01/01/1970 = " . time() . "<br>"
		. "The current time and date = " . date("l F j, Y - G:i:s", time()) . "<br>"
		. "With checkdate() you can check if a date can exsist.<br>";
	$month = 9;
	$day = 19;
	$year = 1983;
	if (checkdate($month, $day, $year)) {
		echo "Date in the code is valid.";
	} else {
		echo "Date in the code is NOT valid";
	}

?>
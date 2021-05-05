<?php //Example 4-16
	$a = 1;
	$b = 0;

	if ($a > 0 AND $b > 0 ) {
		echo "<p>A and B are bigger then 0.";
		echo "<br>";
	} else {
		echo "<p>At least one of them is not 0";
		echo "<br>";
	}
	if ($a > 0 XOR $b > 0) {
		echo "<p>At least one of them is bigger then 0.";
		echo "<br>";
	} else {
		echo "<p>They are smaller then 1.";
		echo "<br>";
	}
	if (!$a) {
		echo "A is not truthy";
		echo "<br>";
	} else {
		echo "A is truthy";
		echo "<br>";
	}
	if (!$b) {
		echo "B is not truthy";
		echo "<br>";
	} else {
		echo "B is truthy";
		echo "<br>";
	}

	echo ($a AND $b) . "<br>";
	echo ($a or $b)  . "<br>";
	echo ($a XOR $b) . "<br>";
	echo !$a;       
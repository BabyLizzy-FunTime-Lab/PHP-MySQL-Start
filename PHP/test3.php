<?php
	//Super globals
	echo "<h3>Super Globals</h3>";
	// echo $GLOBALS;
	$from = $_SERVER['HTTP_REFERER'];
	echo $from;

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['globals'])) {
		$name = $_POST['name'];
		if (empty($name)) {
			echo "<br>";
			echo "Name is empty. Please input name.";
		} else {
			echo "<br>";
			echo "Welcome: " . $name;
		}
	}
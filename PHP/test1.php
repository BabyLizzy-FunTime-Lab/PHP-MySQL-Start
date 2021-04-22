<?php //test1.php
	$username = "Fred Smith";
	echo "Username = " . $username;
	echo "<br>";
	$current_user = $username;
	echo "Currentuser = " . $current_user;
	echo "<br>";
	$writestuf = "This is an echo.";
	echo $writestuf;
	echo "<h3>Sam's Corner</h3> <p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.  </p>";

	echo "<br>";

// 	$author = "Bill Gates";
// 	$text = "Measuring programming progress by lines of code is like
// 	Measuring aircraft building progress by weight. 
// 	- $author.";
// 	echo $text;

// 	echo "<br>";

// 	$writer = "Brian W. Kernighan";
//   	echo <<<_END
// 	Debugging is twice as hard as writing the code in the first place.
// 	Therefore, if you write the code as cleverly as possible, you are,
// 	by definition, not smart enough to debug it.

// 	- $writer.
// _END;
	$author = "Scott Adams";

	$out = <<<_END
	Normal people believe that if it ain’t broke, don’t fix it.
	Engineers believe that if it ain’t broke, it doesn’t have enough
	features yet.

	- $author.
_END;
	echo $out;
	
	// Making a constant
	define("FIRST_CONSTANT", "This is my first PHP constant.");
	echo "<h3>Constant</h3>";
	echo FIRST_CONSTANT;

	// Magic constant
	echo "<h3>Magic constant</h3>";
	echo "This is line " . __LINE__ . " of file " . __FILE__;

	// Global variabels
	global $AWESOME;
	$AWESOME = true;
	echo "<h3>Global variabels</h3>";
	echo "The status of awesome = " . $AWESOME;

	//Static variabels
	echo "<h3>Static variabel</h3>";
	function staticCounter()
	{
		static $count = 0;
		echo "The count = " . $count;
		echo "<br>";
		$count++;
		if ($count == 5) {
			echo "Last count.";
			echo "<br>";
		}
		while ($count < 6) {
			staticCounter();
		}
		
	}
	staticCounter();

	
?>
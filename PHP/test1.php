<?php //test1.php
	$username = "Fred Smith";
	echo "Username = " . $username;
	echo "<br>";
	$current_user = $username;
	echo "Currentuser = " . $current_user;
	echo "<br>";
	$writestuf = "Essie's ass is bouncy.";
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
?>
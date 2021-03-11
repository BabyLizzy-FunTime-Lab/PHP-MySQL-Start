<?php
	function longdate($timestamp)
	{
		return date("l F jS Y", $timestamp);
	}
	echo "Today is:  " . longdate(time());
	echo "<br>";
	echo "Two days ago it was:  " . longdate(time() - (2 * 24 * 60 * 60));
?>
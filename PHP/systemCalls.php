<?php
	$cmd = 'dir'; //windows
	exec(escapeshellcmd($cmd), $output, $status);

	if ($status) {
		echo "Exec command failed";
	} else {
		echo "<pre>";
		foreach($output as $line) {
			echo htmlspecialchars("$line\n");
		}
		echo "</pre>";
	}
?>
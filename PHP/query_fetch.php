<?php
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);

	if ($conn->connect_error) {
		die("Fatal Error");
	}

	$query = "SELECT * FROM classics";
	$result = $conn->query($query);

	if (!$result) {
		die("Fatal Error");
	}

	$rows = $result->num_rows;

	// This searches the result object multiple times
	// for ($j=0; $j < $rows; ++$j) { 
	// 	$result->data_seek($j);
	// 	echo 'Author: ' .htmlspecialchars($result->fetch_assoc()['author']) .'<br>';
	// 	$result->data_seek($j);
	// 	echo 'Title: ' .htmlspecialchars($result->fetch_assoc()['title']) .'<br>';
	// 	$result->data_seek($j);
	// 	echo 'Category: ' .htmlspecialchars($result->fetch_assoc()['category']) .'<br>';
	// 	$result->data_seek($j);
	// 	echo 'Year: ' .htmlspecialchars($result->fetch_assoc()['year']) .'<br>';
	// 	$result->data_seek($j);
	// 	echo 'ISBN: ' .htmlspecialchars($result->fetch_assoc()['isbn']) .'<br><br>';
	// }

	// This cut the amount of searches into the result object.
	for ($j=0; $j < $rows; $j++) { 
		$row = $result->fetch_array(MYSQLI_ASSOC);	

		echo 'Author: '. htmlspecialchars($row['author']). '<br>';
		echo 'Title: '. htmlspecialchars($row['title']). '<br>';
		echo 'Category: '. htmlspecialchars($row['category']). '<br>';
		echo 'Year: '. htmlspecialchars($row['year']). '<br>';
		echo 'ISBN: '. htmlspecialchars($row['isbn']). '<br><br>';
	}

	$result->close();
	$conn->close();
?>
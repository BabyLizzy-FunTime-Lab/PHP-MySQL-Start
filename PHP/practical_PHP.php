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
	echo "<h3>File Handeling</h3>Let's create a file:<br>";
	if (file_exists("testData/testfile.txt")) {
		echo "File exists<br>";
	} 
	// else {
	// 	$fh = fopen("testData/testfile.txt", "w") or die("Failed to create file<br>");
	// 	$text = <<<_END
	// 	Line 1
	// 	Line 2
	// 	Line 3
	// 	_END;
	// 	fwrite($fh, $text) or die("Could not write to file<br>");
	// 	fclose($fh);
	// 	echo "File 'testfile.txt' written successfully<br>";
	// }
	echo "Let's read a file:<br>";
	$fh = fopen("testData/testfile.txt", "r") or die("File does not exist or you lacl permission");
	$line = fread($fh,filesize("testData/testfile.txt"));
	fclose($fh);
	echo $line . "<br>";
	echo "Let's copy a file:<br>";
	copy("testData/testfile.txt", "testData/testfile_2.txt") or 
		die("Could not copy file<br>");
	echo "File copied<br>";
	echo "Let's move a file:<br>";
	if (!rename("testData/testfile_2.txt", "testData_2/testfile_2.txt")) {
		echo "Could not rename file<br>";
	} else {
		echo "File has been moved.<br>";
	}
	echo "Let's delete a file:<br>";
	if (!unlink("testData_2/testfile_2.txt")) {
		echo "Could not delete.<br>";
	} else {
		echo "File testData_2/testfile_2.txt deleted<br>";
	}
	$fh = fopen("testData/testfile.txt", "r+") or die("Failed to open file<br>");
	$text = fgets($fh);
	fseek($fh, 0, SEEK_END);
	fwrite($fh, "$text") or die("Could not write to file<br>");
	fclose($fh);
	echo "File is updated<br>";
	echo "Let's lock a file:<br>";
	$fh = fopen("testData/testfile.txt", 'r+') or die("Failed to open file");
	$text = fgets($fh);
	if (flock($fh, LOCK_EX)) {
		fseek($fh, 0, SEEK_END);
		fwrite($fh, $text) or die("Could not write to file<br>");
		flock($fh, LOCK_UN);
	}
	fclose($fh);
	echo "File successfully updated<br>";
	echo "Let's read an entire file:<br>" . 
	"<pre>" . file_get_contents("testData/testfile.txt") .
	"</pre>";
	
	// echo "Let's upload files:<br>";
	// echo <<<_END
	// 	<form method='post' action='PHP/practical_PHP.php' enctype='multipart/form-data'>
	// 	Select FIle: <input type='file' name='filename'>
	// 	<input type='submit' value='Upload'>
	// 	</form>
	// _END;
	// if ($_FILES) {
	// 	$name = $_FILES['filename']['name'];
	// 	// move_uploaded_file($_FILES['filename']['tmp_name'], $name);
	// 	// echo "Uploaded image '$name'<br><img src='$name'>";
	// 	if(move_uploaded_file($_FILES['filename']['tmp_name'], $name)) {
	// 		echo "Uploaded image '$name'<br><img src='$name'>";
	// 	} else {
	// 		echo "File not uploaded";
	// 	}
	// }
?>
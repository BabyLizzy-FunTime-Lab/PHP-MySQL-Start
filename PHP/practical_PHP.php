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
	// echo "Let's read an entire file:<br>" . 
	// "<pre>" . file_get_contents("testData/testfile.txt") .
	// "</pre>";
	
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
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['startFileApp'])) {
		fileApp();
	}
	// delete a file
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteFile'])) {
		if (!unlink('testData/testfile_3.txt')) {
			echo "Could not delete testfile_3";
		} else {
			echo "<h2>New File App</h2>";
			echo "testfile_3 has been deleted.";
		}
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addText'])) {
		if (file_exists("testData/testfile_3.txt")) {
			textAdd();
		} else {
			echo "<h2>New File App</h2>";
			echo "testfile_3.txt does not exist.";
		}
	}
	function fileApp() {
		echo "<h2>New File App</h2>";
		if (file_exists("testData/testfile_3.txt")) {
			$filelink = "testData/testfile_3.txt";
			$copylink = "testData/testfile_3_copy.txt";
			$file = fopen($filelink, "r") or die("Could not read file");
			$file_1 = fopen($filelink, "r") or die("Could not read file");
			// each operation needs it own referance to the txt file.
			$line = fgets($file);
			$partline = fread($file_1, filesize($filelink));
			fclose($file);
			fclose($file_1);
			if(!copy($filelink, $copylink)) {
				echo "Could not copy file<br>";
			} else {
				echo "File was copied<br>";
				echo "<br>";	
			}
			echo "This is the first string line of the file:<br>" . $line . "<br>";
			echo "<br>";
			echo "This all the text in the file:<br>" . $partline . "<br>";
		} else {
			$newfile = fopen("testData/testfile_3.txt", "w") or die("Failed to create file");
			$fileinput = <<<_END
			Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
			_END;
			fwrite($newfile, $fileinput) or die("Could not write to file");
			fclose($newfile);
			echo "A newfile was made";
		}
	}
	function textAdd() {
		$gluetext = array(
			"<br>And anotha thing mothafuka!!!",
			"<br>Listen here!!",
			"<br>Do you speak english?!"
		);
		$text = array(
			"Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.",
			"Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'?",
			"My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?"
		);
		$targetfilelink = "testData/testfile_3.txt";
		$targetfile = fopen($targetfilelink, "a+") or die("Failed to open file");
		fwrite($targetfile, $gluetext[rand(0,2)] . "<br>" . $text[rand(0,2)]);
		fclose($targetfile);
		echo "testfile_3 updated";
	}

?>
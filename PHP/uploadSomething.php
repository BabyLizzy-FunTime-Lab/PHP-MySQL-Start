<?php
	echo "<h3>Let's upload files:</h3><br>";
	echo <<<_END
		<form method='post' action='PHP/uploadSomething.php' enctype='multipart/form-data'>
		Select FIle: <input type='file' name='filename'>
		<input type='submit' value='Upload'>
		</form>
	_END;
	if ($_FILES) {
		$name = $_FILES['filename']['name'];
		$savefile = 'C:/Program Files/Ampps/www/PHP-MySQL-Start/testData/';
		$testData = $savefile . $name;
		switch ($_FILES['filename']['type']) {
			case 'image/jpeg': $ext = 'jpg'; break;
			case 'image/gif': $ext = 'gif'; break;
			case 'image/png': $ext = 'png'; break;
			case 'image/tiff': $ext = 'tif'; break;
			default: $ext = '';	break;
		}
		if ($ext) {
			$safename = "image.$ext";
			$safepath = $savefile . $safename;
			$safeLocacion = "/PHP-MySQL-Start/testData/" . $safename;
			if(move_uploaded_file($_FILES['filename']['tmp_name'], $safepath)) {
			echo "Uploaded a " . $ext . " image.<br>Filename: '$name'<br><img src='" . $safeLocacion . "'>";
			} else {
				echo "File not uploaded";
			}
		} else {
			echo "This was not an accepted image type.";
		}
	}
?>
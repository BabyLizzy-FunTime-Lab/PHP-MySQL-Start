<?php
	echo "<h3>Numeric (Regular) Array.</h3>";
	$paper[] = "copier";
	$paper[] = "inkjet";
	$paper[] = "laser";
	$paper[] = "photo";

	for ($i=0; $i < 4; $i++) { 
		echo "$i: $paper[$i]<br>";
	}

	echo "<h3>Associative Array.</h3>";
	$starTrek_personel['captains'] = "List of captains";
	$starTrek_personel['commander'] = "List of commanders";
	$starTrek_personel['lieutenant commander'] = "List of lieutenat commanders";
	$starTrek_personel['lieutenant'] = "List of lieutenants";
	echo $starTrek_personel['captains'];

	echo "<h3>Foreach....as</h3>";
	echo "<p>Regular Array</p>";
	$guitars = array("strat", "tele", "lespaul", "semi-hollow", "super-strat");
	$g = 0;
	foreach ($guitars as $type) {
		echo "$g: $type<br>";
		$g++;
	}
	echo "<br><p>Associative Array</p>";
	$cars = array('Toyota' => 'Toyota car list',
					'Dodge' => 'Dodge car list',
					'Chevy' => 'Chevy car list',
					'Renault' => 'Renault car list');
	foreach ($cars as $brand => $model_list) {
		echo "$brand: $model_list<br>";
	}

	echo "<h3>Mutidimencional Arrays</h3>";
	echo "<p>This is a 2D tabel with the tabel of 1 to 10 in it.</p>";
	echo "<p>It's 10 numeric arrays within an associative array</p>";
	function tafelVanTien_Array($range) {
		$tafel_array = array();
		for ($i=1; $i < $range + 1; $i++) { 
			for ($j=1; $j < $range + 1; $j++) {
				// Here I make uniqe array names with the counter.
				// It will retain it's old value on the new loop.
				${"tafel_$i"}[0] = 0;
				${"tafel_$i"}[] = $i * $j;
				if (count(${"tafel_$i"}) == 11) {
					// Here I make an associative array.
					$tafel_array["tafel_$i"] = ${"tafel_$i"};
				}
			}
		}
		return $tafel_array;
	}
	print_r(tafelVanTien_Array(10));

?>
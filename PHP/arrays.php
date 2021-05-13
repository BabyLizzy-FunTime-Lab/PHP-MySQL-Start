<?php
	echo "<h3>Regular Array.</h3>";
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


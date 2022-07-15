<?php
	// De tafels rond de tafel van 10
	// De antwoorden worden in een tabel gezet
	for ($M_cand=1; $M_cand < 11; $M_cand++) { 
		static $table_data;
		$table_data = $table_data . "<tr>";
		for ($M_plier=8; $M_plier < 13; $M_plier++) { 
			$product = $M_cand * $M_plier;
			$table_data = $table_data . "<td>" . $M_cand . " * " .  $M_plier . " = " . $product . "</td>";
		}
		$table_data = $table_data . "</tr>";
	}

	$array_vraag_1 = array("red", "green", "white");
	$array_vraag_2 = array(
		"Volvo" => "Blauw",
		"Audi" => "Groen",
		"BMW" => "Geel",
		"Skoda" => "Geel"
	);
	foreach ($array_vraag_2 as $naam => $kleur) {
		static $cars;
		$cars = $cars . "<li>" . $naam . "@" . $kleur . "</li>";
	}

	// test function variable declaration
	$foo = "ipsum";
	function fun($bar) {
		echo "Test funtion " . $bar . "<br>";
		// echo "Test function " . $foo;
		// $foo doesn't work because it's undefined inside the function.
	}

	// // Boom van pytagoras
	// class TBoomvanPythagoras {
	// 	private $im;
	// 	private $white;
	// 	private $black;
	// 	private $SpinamBlue;
	// 	private $rood;
	// 	private $logLineNumer;
	// 	private $diepte;
	// 	// function __constructor($width=500, $height=500) {
	// 		function __constructor($breedte=500) {
	// 			$this->logLIneNumer = 0;
	// 			$this->width = $breedte;
	// 			$this->height = $breedte * 0.6;
	// 			$this->aantal = $breedte/125;

	// 			// create a pointer to a new true colour image
	// 		}
	// }
	
	// Dit functie keert een string om en zet het op het scherm
	function keerString($string) {
		echo "Ingevoerde string: " . $string . "<br>";
		echo "Omgekeerde string: " . strrev($string);
	};	

	// Factorial
	function factorial($number) {
		static $factorialnum;
		static $startnum = 0;

		if ($startnum < $number) {
			$startnum = $number;
			$factorialnum = $number;
		}

		$newNumber = $number - 1;
		if($newNumber == 0) {
			echo "De fractorial van " . $startnum . " = " . $factorialnum;
			return;
		};
		$factorialnum = $factorialnum * $newNumber;
		
		factorial($newNumber);
	};

	echo <<<_END
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>oefenen</title>
		</head>
		<body>
			<h1>Oefenen met PHP</h1>
			<article>
				<h2>Loops</h2>
				<table>
					<thead> 
						<th colspan="5">
							De tafels rond de tafel van 10:
						</th>
					</thead>
					<tbody>
						$table_data
					</tbody>
				</table>
			</article>
			<article>
				<h2>Arrays</h2>
				<h3>Arrays oefen opdracht 1</h3>
				<h4>Vraag 1:</h4>
				<p>
					"The memory of that scene for me is like a frame of film forever 
					frozen at that moment: the $array_vraag_1[0] carpet, the $array_vraag_1[1] lawn, the $array_oefen_1[2] house, 
					the leaden sky. The new president and his first lady. - Richard M. Nixon"
				</p>
				<h4>Vraag 2:</h4>
				<p>We Like</p>
				<ul>
					$cars
				</ul>
			</article
_END;
		echo <<<_END
			<article>
				<h2>Function and variable scope</h2>
_END;
		fun("lorem");
		echo "</article>";

		echo <<<_END
			<article>
				<h2>String om keren</h2>
_END;
		keerString("1234");
		echo "</article>";

		echo <<<_END
			<article>
				<h2>Factorial</h2>
_END;
		factorial(5);
		echo "</article>";

		echo <<<_END
			</body>
			</html>
_END; 
?>
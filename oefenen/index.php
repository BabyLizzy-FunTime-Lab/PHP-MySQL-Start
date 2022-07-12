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
				<h2>Boom van pytagoras</h2>
_END;
		echo "</article>";

		echo <<<_END
			</body>
			</html>
_END; 
?>
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
		</body>
		</html>
_END; 
?>
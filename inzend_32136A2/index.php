<?php
    // Lengte in meters
    $input_lengte = 1.91;
    // Gewicht in kg
    $input_gewicht = 40;

    // De BMI berekening en de evaluatieschaal zijn gemaakt volgen de informatie gevonden op, 
    // https://www.diabetesfonds.nl/over-diabetes/diabetes-in-het-algemeen/woordenboek/body-mass-index-bmi
    for ($gewicht = $input_gewicht; $gewicht < ($input_gewicht + 120); $gewicht+=10) { 
        static $BMI_overzicht;
        $BMI = $gewicht / pow($input_lengte, 2);
        $BMI_evaluatie;
        switch ($BMI) {
            case $BMI < 18.5:
                $BMI_evaluatie = " ondergewicht (te laag gewicht)";
                break;
            case $BMI >= 18.5 && $BMI <= 24.9:
                $BMI_evaluatie = " gezond gewicht";
                break;
            case $BMI >= 25 && $BMI <= 30:
                $BMI_evaluatie = " overgewicht";
                break;
            case $BMI > 30:
                $BMI_evaluatie = " ernstig overgewicht (obesitas)";
                break;
            default:
                $BMI_evaluatie = " [Error: BMI valt buiten schaal]";
                break;
        }
        $BMI_overzicht = $BMI_overzicht . "<li>Bij een gewicht van " . $gewicht . " kg hebt u een bmi van " . $BMI . ", u hebt" . $BMI_evaluatie . ".</li>";
    }

    echo <<<_END
    <!DOCTYPE html>
    <html lang="nl">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="css/normalize.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <title>Inzendopdracht: 32136A1</title>
        </head>
        <body>
            <header id="banner-container">
                <div id="banner">
                    <h1>Opdracht 32136A2: BMI app</h1>
                </div>
            </header>
            <article id="BMI-container">
                <h2>BMI overzicht bij $input_lengte:</h2>
                <div id="BMI-overzicht">
                    <ul>
                        $BMI_overzicht
                    </ul>
                </div>
            </article>
        </body>
    </html>
_END;    
?>
<?php
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
            <header id="hoofd-header">
                <h1>Hello World</h1>
            </header>
            <article id="about-container">
                <div id="about">
                    <h2>About</h2>
                    <p>
                        Hello World!! Mijn naam is José Luis Rasmussen Garcia. Ik studeer frontend development op de LOI en ik ben op zoek naar een bedrijf waar ik mijn carriere kan starten. 
                    </p>
                    <p>
                        Ik heb certificaten in HTML5, CSS3 en javascript. Binnen de komende maanden zal ik certificaten in PHP & SQL behalen. Als afgestudeerde frontend developer bij de LOI zal ik ook bekwaam zijn in vue.js.
                    </p>
                </div>
                <picture id="mugshot-container">
                    <img id="mugshot" src="image/mugshot.jpg" alt="Foto van José">
                </picture>
                <video id="hallovideo" controls>
                    <source src="video/helloworld.mp4" type="video/mp4">
                </video>
            </article>
        </body>
    </html>
_END;    
?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP & SQL Start AMPPS</title>
    <meta charset="utf-8">
    <meta name="keywords" content="PHP, SQL, Start">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="Style/normalize.css">
	<link rel="stylesheet" type="text/css" href="Style/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="JS/front.js" async></script>
	<!-- The echo time forces the css to reload everytime -->
    
</head>

<body>
	<header id="pageheader">
		<h1>AMPPS Server</h1>
    	<p>Let's do some PHP & SQL</p>
	</header>
    
    <article id="HelloWorld-PHP" class="PHP-test" >
    	<h2>PHP test: Hello World</h2>
        <?php include 'PHP/helloWorld.php';?>
    </article>

    <article id="php-test1" class="PHP-test">
    	<h2>PHP test: 1. Echo's and variabels</h2>
    	<?php include 'PHP/test1.php';?>
    </article>

    <article id="php-test2" class="PHP-test">
    	<h2>PHP test: 2. Functions</h2>
    	<?php include 'PHP/test2.php';?>
    </article>

    <article id="php-test3" class="PHP-test">
    	<h2>PHP test: 3. Super Globals</h2>
    	<?php include 'PHP/test3.php';?>
    	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    		<label for="name">Name: </label>
    		<input type="text" name="name" id="name">
    		<input type="submit" name="submit" id="submit">
    	</form>
    </article>

    <article id="php-test4" class="PHP-test">
    	<h2>PHP test: 4. AJAX en PHP</h2>
    	<p>How many seconds old are you and when are your milestones?</p>
    	<form name="test4_form">
    		<label for="birthdate">Birthdate: </label>
    		<input type="date" name="birthdate" id="birthdate">
    		<input type="submit" name="submit_birthdate" id="submit_birthdate">
    	</form>
    	<section class="test4-ans">
    		<P>Your age in seconds:</P>
    		<p id="ageSec">Now: ....</p>
    		<P id="ageNow">Right Now: ....</P>
    	</section>
    	<section class="test4-ans" id="onemil">
    		<P>Your 1 million sec birthdate:</P>
    		<p id="onemil_date">Date: ....</p>
    		<p id="onemil_age">Your age on this day: .....</p>
    		<button id="onemil-calender">Save the Date</button>
	    </section>
	    <section class="test4-ans" id="halfbillion">
    		<P>Your half billion sec birthdate:</P>
    		<p id="halfbillion_date">Date: ....</p>
    		<p id="halfbillion_age">Your age on this day: .....</p>
    		<button id="halfbillion-calender">Save the Date</button>
    	</section>
		<section class="test4-ans" id="onebillion">
    		<P>Your 1 billion sec birthdate:</P>
    		<p id="onebillion_date">Date: ....</p>
    		<p id="onebillion_age">Your age on this day: .....</p>
    		<button id="onebillion-calender">Save the Date</button>
    	</section>
    	<section class="test4-ans" id="one&halfBillion">
    		<P>Your 1.5 billion sec birthdate:</P>
    		<p id="one&halfBillion_date">Date: ....</p>
    		<p id="one&halfBillion_age">Your age on this day: .....</p>
    		<button id="one&halfBillion-calender">Save the Date</button>
    	</section>
    	<section class="test4-ans" id="twobillion">
    		<P>Your 2 billion sec birthdate:</P>
    		<p id="twobillion_date">Date: ....</p>
    		<p id="twobillion_age">Your age on this day: .....</p>
    		<button id="twobillion-calender">Save the Date</button>
    	</section>
    	<section class="test4-ans" id="two&halfBillion">
    		<P>Your 2.5 billion sec birthdate:</P>
    		<p id="two&halfBillion_date">Date: ....</p>
    		<p id="two&halfBillion_age">Your age on this day: .....</p>
    		<button id="two&halfBillion-calender">Save the Date</button>
    	</section>
    	<section class="test4-ans" id="treebillion">
    		<P>Your 3 billion sec birthdate:</P>
    		<p id="treebillion_date">Date: ....</p>
    		<p id="treebillion_age">Your age on this day: .....</p>
    		<button id="treebillion-calender">Save the Date</button>
    	</section>   	
    </article>

    <footer>
    	<h3>Footer</h3>
    </footer>

</body>

</html>
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
    		<input type="submit" name="globals" id="submit">
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
    		<button id="onemil_calender">Save the Date</button>
	    </section>
	    <section class="test4-ans" id="halfbillion">
    		<P>Your half billion sec birthdate:</P>
    		<p id="halfbillion_date">Date: ....</p>
    		<p id="halfbillion_age">Your age on this day: .....</p>
    		<button id="halfbillion_calender">Save the Date</button>
    	</section>
		<section class="test4-ans" id="onebillion">
    		<P>Your 1 billion sec birthdate:</P>
    		<p id="onebillion_date">Date: ....</p>
    		<p id="onebillion_age">Your age on this day: .....</p>
    		<button id="onebillion_calender">Save the Date</button>
    	</section>
    	<section class="test4-ans" id="one&halfBillion">
    		<P>Your 1.5 billion sec birthdate:</P>
    		<p id="one&halfBillion_date">Date: ....</p>
    		<p id="one&halfBillion_age">Your age on this day: .....</p>
    		<button id="one&halfBillion_calender">Save the Date</button>
    	</section>
    	<section class="test4-ans" id="twobillion">
    		<P>Your 2 billion sec birthdate:</P>
    		<p id="twobillion_date">Date: ....</p>
    		<p id="twobillion_age">Your age on this day: .....</p>
    		<button id="twobillion_calender">Save the Date</button>
    	</section>
    	<section class="test4-ans" id="two&halfBillion">
    		<P>Your 2.5 billion sec birthdate:</P>
    		<p id="two&halfBillion_date">Date: ....</p>
    		<p id="two&halfBillion_age">Your age on this day: .....</p>
    		<button id="two&halfBillion_calender">Save the Date</button>
    	</section>
    	<section class="test4-ans" id="treebillion">
    		<P>Your 3 billion sec birthdate:</P>
    		<p id="treebillion_date">Date: ....</p>
    		<p id="treebillion_age">Your age on this day: .....</p>
    		<button id="treebillion_calender">Save the Date</button>
    	</section>   	
    </article>

    <article id="php-test5" class="PHP-test">
    	<h2>PHP test: Example 4-16</h2>
    	<p>A = 1;</p>
    	<p>B = 0;</p>
    	<?php include 'PHP/example4-16.php';?>
    </article>

    <article id="php-test6" class="PHP-test">
    	<h2>PHP Objects</h2>
    	<?php include 'PHP/objects.php';?>
    	<form method="POST" action="">
    		<div>
    			<label for="name">Name: </label>
	    		<input type="text" name="name" id="name">
    			<label for="species">Species: </label>
	    		<input type="text" name="species">
    		</div>
	    	<input type="submit" name="object" value="Submit">
    	</form>
    </article>
    <article id="php-BMI" class="PHP-test">
        <h2>BMI Calculator</h2>
        <p>BMI is gewicht gedeeld door lengte in het kwadraat.</p>
        <?php include_once 'PHP/BMI.php';?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <p>Voeg hier je gewicht en lengte in.</p>
            <div>
                <label for="naam">Naam: </label>
                <input type="text" name="naam">
                <label for="gewicht">Gewicht in kg: </label>
                <input type="number" name="gewicht">
                <label for="lengte">Lengte in meters: </label>
                <input type="number" name="lengte" step="0.01">
            </div>
            <input type="submit" name="BMI" value="Submit">
        </form>
    </article>
    <article id="php-array" class="PHP-test">
        <h2>PHP Arrays</h2>
        <p>Let's do some PHP arrays.</p>
        <?php include_once 'PHP/arrays.php';?>
    </article>
    <article id="php-practical" class="PHP-test">
        <h2>Practical PHP</h2>
        <?php include_once 'PHP/uploadSomething.php';?>
        <?php include_once 'PHP/practical_PHP.php';?>
        <h2>Dive back in</h2>
        <form method='POST' action='<?php echo $_SERVER['PHP_SELF'];?>'>
            <input type='submit' name='startFileApp' value='File App'>
            <input type='submit' name='addText' value='Add to File'>
            <input type="submit" name="deleteFile" value="Delete File">
        </form>
    </article>
	<article id="php-sql" class="PHP-test">
		<h2>Combine PHP with SQL</h2>
		<h3>Get data from Publications db</h3>
		<?php include_once 'PHP/query_fetch.php';?>
		<h3>Insert & Delete</h3>
		<?php include_once 'PHP/sqltest.php';?>
		<h3>Working with Tables</h3>
		<?php include_once 'PHP/createTable.php';?>
		<?php include_once 'PHP/describeTable.php';?>
		<?php include_once 'PHP/dropTable.php';?>
		<form method='POST' action='<?php echo $_SERVER['PHP_SELF'];?>'>
            <div>
				<input type='radio' id='createtable' name='table' value='create' style="display: inline">
				<label for='createtable' style="display: inline">Create Table</label>
			</div>
            <div>
				<input type='radio' id='describetable' name='table' value='describe'style="display: inline" >
				<label for='describetable' style="display: inline">Describe Table</label>
			</div>
            <div>
				<input type="radio" id='droptable' name="table" value='drop'style="display: inline">
				<label for='droptable'style="display: inline">Drop Table</label>
			</div>
			<input type="submit" value="DO IT">
        </form>
		<h3>Making a query and a subquery</h3>
		<?php include_once 'PHP/additionalQueries.php';?>
		<h3>Placeholders & prepared statements</h3>
		<?php include_once 'PHP/placeholders.php';?>
		<h3>Form handeling</h3>
		<?php include_once 'PHP/formtest.php';?>
	</article>
	<article id="php-6th" class="PHP-test">
		<?php $var = 'Oefenopgave 5'; ?>
		<h3><?php echo $var;?></h3>
		<p>
			Here is a <a href="https://www.w3schools.com/php/"><?php echo "link " . $var;?></a> to the good stuff
		</p>
	</article>
    <article id="php-bbd-objects" class="PHP-test">
        <?php include_once  'PHP/bbd_OOP.php';?>

    </article>
    <footer>
    	<h3>Footer</h3>
    </footer>

</body>

</html>
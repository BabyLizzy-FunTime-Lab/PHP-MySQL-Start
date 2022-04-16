<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['object'])) {
		$input_name = $_POST['name'];
		$input_species = $_POST['species'];

		if (empty($input_name) XOR empty($input_species)) {
			echo "<p>Please insert name and species</p>";
		} else { 
			$user_object = new User;
			$user_object->user_id = uniqid();
			$user_object->user_name = $input_name;
			$user_object->user_species = $input_species;
			$user_object->userWelcome();
			// print_r($user_object);
			echo "<br>";
			$twin_object = new Twin(uniqid(), $input_name, $input_species);
			$twin_object->twinWelcome();
		}
	}

	class User {
		// Properties
		public $user_id, $user_name, $user_species;
		// Method
		function userWelcome() {
			echo "<p>Welcome: " . $this->user_name . "</P>";
			echo "<p>Client ID: " . $this->user_id . "</P>";
			echo "<p>You are a: " . $this->user_species . "</p>";
		}
	}
	class Twin {
		// Properties
		public $twin_id, $twin_name, $twin_species;
		// Constructor
		public function __construct($id, $name, $species) {
			$this->twin_id = $id;
			$this->twin_name = $name;
			$this->twin_species = $species;
		}
		// Method
		public function twinWelcome() {
			echo "<p>Welcome Twin: " . $this->twin_name . "</P>";
			echo "<p>ClientTwin ID: " . $this->twin_id . "</P>";
			echo "<p>Sup Twin, You are a: " . $this->twin_species . "</p>";
		}
	}

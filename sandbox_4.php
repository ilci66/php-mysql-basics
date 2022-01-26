<?php

	class User {
		private $email;
		private $name;
		public function __construct($name, $email){
			$this->name = $name;
			$this->email = $email;
		}

		public function login(){
			echo $this->name . ' logged in';
		}

		public function getName(){
			return $this->name;
		}

		public function setName($name){
			if(is_string($name) && strlen($name) > 1){
				$this->name = $name;
				return "name updated to $name";
			} else {
				return 'not a valid name';
			}
		}

	}

	$userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');
    
	// $userTwo->name = 'mario';
	// echo $userTwo->name; // as it's private directly trying here throws an error

    // these are fine though, because I'm reaching them from inside the class
	echo $userTwo->getName();
	echo $userTwo->setName('ilker') . "\n";
	echo $userTwo->getName();

?>
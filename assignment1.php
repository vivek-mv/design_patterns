<?php 
	//Class to make db connection
	Class DbConnect {
		//Static member variable to hold the connection object
		private static $conn = NULL; 

		private static $instance = NULL;
		private function __construct() { 

			// Create connection
			self::$conn = new mysqli("localhost", "root", "mindfire", "registration");
			// Check connection
			if (self::$conn->connect_error) {
			    echo "Connection failed: " . $conn->connect_error;
			}
		}

		public static function connect() {

			if (self::$instance === NULL) {
				
				self::$instance = new DbConnect();
				return self::$instance;
			} else {
				return self::$instance;
			}
		}
	}

	$myDbConn = DbConnect::connect();

	$myDbConn2 = DbConnect::connect();

	var_dump($myDbConn);

	var_dump($myDbConn2);
	?>
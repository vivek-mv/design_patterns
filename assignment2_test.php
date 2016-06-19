<?php 
	Class NexaOrder {
		public $models = array();
		///private $car;
		public function placeOrder($model) {
			//$this->manufacture($model);
			$this->car = new manufactureCar($model);
			array_push($this->models,$this->car->model);
			return $models;
		}
	}

	Class ManufactureCare {

		public __construct($model) {
			echo "A car of model ".$model." has been created";
		}
	}

	new NexaOrder("Farari");
?>
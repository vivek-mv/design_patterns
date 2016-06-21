<?php 
	Class Mindfire {

		public function getEmpDetails() {
			new Employee();
		}

		public function getSalesInfo() {
			new Sales();
		}

		public function getProductsInfo() {
			new Products();
		}
	}

	Class Employee {

		public function __construct() {
			echo "Employee Details are : ";
		}
	}

	Class Sales {
		
		public function __construct() {
			echo "Sales Info : ";
		}
	}

	Class Products {
		
		public function __construct() {
			echo "Products Info : ";
		}
	}

	$mindfire = new Mindfire();
	$mindfire->getEmpDetails();
	$mindfire->getSalesInfo();
	$mindfire->getProductsInfo();
?>
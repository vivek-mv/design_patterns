<?php 

	Class Sort {
		public function __construct($data) {
			$this->sort($data);
		}

		public function sort($data) {

			if (count($data) > 5) {
				$sortData = new QuickSort();
				$sortData->sort($data);
			} else {
				$sortData = new MergeSort();
				$sortData->sort($data);
			}
		}
	}
	Class QuickSort {
		public function sort($data) {
			echo "sorting the data using quicksort";
		}
	}

	Class MergeSort {
		public function sort($data) {
			echo "sorting the data using mergesort";
		}
	}

	$mySort = new Sort(array(1,3,2,3,2,3,2,3,3));

?>
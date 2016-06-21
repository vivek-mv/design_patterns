<?php 
	Class Book {

	private $title = '';

	public function setTitle($title) {
		$this->title = $title;
	}

	public function getTitle() {
		return $this->title;
	}

	public function __clone() {}
 }

 $newBook = new Book();
 $newBook->setTitle("oops");
 $title = $newBook->getTitle();
 echo $title;
 echo "<br>";

 $newBook2 = clone $newBook;

 $newBook2->setTitle("designPattern");
 $title = $newBook2->getTitle();
 echo $title;
 echo "<br>";

 $newBook3 = $newBook;

 $newBook3->setTitle("newTittle");

 echo $newBook->getTitle();



?>
<?php 
	Class Book {

		private $title = '';
		private $author = '';
		public function __construct($title, $author) {
			$this->title = $title;
			$this->author = $author;
		}

		public function getTitle() {
			return $this->title;
		}

		public function getAuthor() {
			return $this->author;
		}
	}

	Class ExtendedBook  {
		private $book;
		public function __construct($book){

			$this->book = $book;
		}

		public function getTitleAndAuthor() {
			echo "Title is : ".$this->book->getTitle()." and author is : ".$this->book->getAuthor();
		}
	}

	$book = new Book('design patterns', 'manas'); 

	$extendedBook = new ExtendedBook($book);
	$extendedBook->getTitleAndAuthor();

?>
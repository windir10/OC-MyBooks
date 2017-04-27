<?php

namespace MyBooks\Domain;

/**
 * Book model class - Main object of the website
 *
 * @author Steven DUMONT <windir10 at gmail.com>
 */
class Book {
	/**
	 * Book id
	 * 
	 * @var integer
	 */
	private $id;
	
	/**
	 * Book title
	 * 
	 * @var string
	 */
	private $title;
	
	/**
	 * Book isbn
	 * 
	 * @var string
	 */
	private $isbn;
	
	/**
	 * Book summary
	 * 
	 * @var string
	 */
	private $summary;
	
	/**
	 * Associated author
	 * 
	 * @var \MyBooks\Domain\Author
	 */
	private $author;
	
	/**
	 * Get the book's id
	 * 
	 * @return integer Return the book's id
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Setting the book's id
	 * 
	 * @param integer $id Book's id
	 * 
	 * @return \MyBooks\Domain\Book Return the current book object
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * Get the book's title
	 * 
	 * @return string Return the book's title
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * Setting the book's title
	 * 
	 * @param string $title Book's title
	 * 
	 * @return \MyBooks\Domain\Book Return the current book object
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}
	
	/**
	 * Get the book's isbn
	 * 
	 * @return string Return the book's isbn
	 */
	public function getIsbn() {
		return $this->isbn;
	}
	
	/**
	 * Setting the book's isbn
	 * 
	 * @param string $isbn Book's isbn
	 * 
	 * @return \MyBooks\Domain\Book Return the current book object
	 */
	public function setIsbn($isbn) {
		$this->isbn = $isbn;
		return $this;
	}
	
	/**
	 * Get the book's summary
	 * 
	 * @return string Return the book's summary
	 */
	public function getSummary() {
		return $this->summary;
	}
	
	/**
	 * Setting the book's summary
	 * 
	 * @param string $summary Book's summary
	 * 
	 * @return \MyBooks\Domain\Book Return the current book object
	 */
	public function setSummary($summary) {
		$this->summary = $summary;
		return $this;
	}
	
	/**
	 * Get the book's author
	 * 
	 * @return \MyBooks\Domain\Author Return the book's author object
	 */
	public function getAuthor() {
		return $this->author;
	}
	
	/**
	 * Setting the book's author
	 * 
	 * @param \MyBooks\Domain\Author $author Book's author object
	 * 
	 * @return \MyBooks\Domain\Book Return the current book object
	 */
	public function setAuthor(Author $author) {
		$this->author = $author;
		return $this;
	}
}

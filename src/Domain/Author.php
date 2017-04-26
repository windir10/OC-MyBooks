<?php

namespace MyBooks\Domain;

/**
 * Author model class - Owner/writer of a book
 *
 * @author Steven DUMONT <windir10 at gmail.com>
 */
class Author {
	/**
	 * Author id
	 * 
	 * @var integer
	 */
	private $id;
	
	/**
	 * Author first name
	 * 
	 * @var string
	 */
	private $firstName;
	
	/**
	 * Author last name
	 * 
	 * @var string
	 */
	private $lastName;
	
	/**
	 * Get the author's id
	 * 
	 * @return integer Return the author's id
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Setting the author's id
	 * 
	 * @param integer $id Author's id
	 * 
	 * @return Author Return the current author object
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * Get the author's first name
	 * 
	 * @return string Return the author's first name
	 */
	public function getFirstName() {
		return $this->firstName;
	}
	
	/**
	 * Setting the author's first name
	 * 
	 * @param string $firstName Author's first name
	 * 
	 * @return Author Return the current author object
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
		return $this;
	}
	
	/**
	 * Get the author's last name
	 * 
	 * @return string Return the author's last name
	 */
	public function getLastName() {
		return $this->lastName;
	}
	
	/**
	 * Setting the author's last name
	 * 
	 * @param string $lastName Author's last name
	 * 
	 * @return Author Return the current author object
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
		return $this;
	}
}

<?php

namespace MyBooks\DAO;

use Doctrine\DBAL\Connection;

/**
 * Abstract class for data access object
 *
 * @author Steven DUMONT <windir10 at gmail.com>
 */
abstract class DAO {
	/**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;

    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    /**
     * Grants access to the database connection object
     *
     * @return \Doctrine\DBAL\Connection The database connection object
     */
    protected function getDb() {
        return $this->db;
    }

    /**
     * Builds a domain object from a DB row.
     * Must be overridden by child classes.
	 * 
	 * @param array $row Recordset from the database which contains datas
     */
    protected abstract function buildDomainObject(array $row);
}

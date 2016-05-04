<?php
/**
 * Auteur:  christopher
 * Date:    03/05/16
 * Objet:   Classe abstraite des DAO
 */

namespace Livre\DAO;


use Doctrine\DBAL\Connection;

abstract class DomainObjectDAO
{
	/**
	 * Database connection object from Doctrine
	 * @var \Doctrine\DBAL\Connection
	 */
	private $db;

	/**
	 * DomainObjectDAO constructor.
	 * @param Connection $connection
	 */
	public function __construct(Connection $connection)
	{
		$this->db = $connection;
	}

	/**
	 * Grant access on db object to child classes 
	 * @return Connection
	 */
	protected function getDb()
	{
		return $this->db;
	}

	/**
	 * Child classes must implement this method
	 * Build & return a domain object
	 * @param $row
	 */
	abstract public function buildDomainObject($row);
}
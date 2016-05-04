<?php
/**
 * Auteur:  christopher
 * Date:    03/05/16
 * Objet:   DATA ACCESS OBJECT pour les auteurs
 */

namespace Livre\DAO;

use Livre\Domain\Author;

class AuthorDAO extends DomainObjectDAO
{
	/**
	 * Get one author by his id
	 * @param $id
	 * @return Author
	 */
	public function findAuthor($id)
	{
		$sql    = 'SELECT * FROM author WHERE auth_id=?;';
		$result = $this->getDb()->fetchAssoc($sql, array((int) $id));
		return $this->buildDomainObject($result);
	}

	/**
	 * Build and return an Author object
	 * @param $row from a SQL query
	 * @return Author
	 */
	public function buildDomainObject($row)
	{
		$author = new Author();
		$author->setId($row['auth_id']);
		$author->setFirstName($row['auth_first_name']);
		$author->setLastName($row['auth_last_name']);
		return $author;
	}

}
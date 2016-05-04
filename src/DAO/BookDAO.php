<?php
/**
 * Auteur:  christopher
 * Date:    03/05/16
 * Objet:   DATA ACCESS OBJECT pour les livres
 */

namespace Livre\DAO;

use Livre\Domain\Book;

class BookDAO extends DomainObjectDAO
{
	/**
	 * @var \Livre\DAO\AuthorDAO
	 */
	private $authorDAO;

	/**
	 * Used in order to associate an author to a book
	 * @param $authorDAO \Livre\DAO\AuthorDAO
	 */
	public function setAuthorDAO($authorDAO)
	{
		$this->authorDAO = $authorDAO;
	}

	/**
	 * Return a list of all books
	 * @return array of Books
	 */
	public function findAllBooks()
	{
		$sql    = 'SELECT * FROM book ORDER BY book_id DESC;';
		$result = $this->getDb()->fetchAll($sql);
		$books  = array();
		foreach ($result as $row)
		{
			$books[] = $this->buildDomainObject($row);
		}
		return $books;
	}

	/**
	 * Return a book associate by his id
	 * @param $id Book
	 * @return Book
	 */
	public function findBook($id)
	{
		$sql = 'SELECT * FROM book WHERE book_id=?;';
		$result = $this->getDb()->fetchAssoc($sql, array((int) $id));
		$author = $this->authorDAO->findAuthor($result['auth_id']);
		return $this->buildDomainObject($result, $author);
	}


	/**
	 * Build & return a Book object
	 * @param $row
	 * @param string $author \Livre\Domain\Author if not empty
	 * @return Book
	 */
	public function buildDomainObject($row, $author = '')
	{
		$book = new Book();
		$book->setId($row['book_id']);
		$book->setSummary($row['book_summary']);
		$book->setTitle($row['book_title']);
		$book->setIsbn($row['book_isbn']);
		$book->setAuthor($author);

		return $book;
	}

}
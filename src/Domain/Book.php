<?php
/**
 * Auteur:  christopher
 * Date:    02/05/16
 * Objet:   Classe POPO des livres
 */

namespace Livre\Domain;


class Book
{
	private $id,
			$title,
			$isbn,
			$summary;

	/**
	 * @var \Livre\Domain\Author
	 */
	private $author;

	/*
	 * GETTERS & SETTERS
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
	}

	public function getSummary()
	{
		return $this->summary;
	}

	public function setSummary($summary)
	{
		$this->summary = $summary;
	}

	public function getIsbn()
	{
		return $this->isbn;
	}

	public function setIsbn($isbn)
	{
		$this->isbn = $isbn;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

}
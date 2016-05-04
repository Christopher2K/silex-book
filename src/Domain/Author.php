<?php
/**
 * Auteur:  christopher
 * Date:    03/05/16
 * Objet:   Classe POPO des auteurs
 */

namespace Livre\Domain;


class Author
{
	private $id,
			$firstName,
			$lastName;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}

	/*
	 * SETTERS & GETTERS
	 */

}
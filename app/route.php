<?php
/**
 * Auteur:  christopher
 * Date:    02/05/16
 * Objet:   Fichier contenant les routes
 */

// home
$app->get('/', function() use ($app) {
	$books = $app['dao.book']->findAllBooks();
	return $app['twig']->render('index.html.twig', array('books' => $books));
})
->bind('home');

// book
$app->get('/book/{id}', function($id) use ($app)
{
	$app['dao.book']->setAuthorDAO($app['dao.author']);
	$book = $app['dao.book']->findBook($id);
	return $app['twig']->render('book.html.twig', array('book' => $book));
})
->bind('book');
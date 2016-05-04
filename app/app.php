<?php
/**
 * Auteur:  christopher
 * Date:    02/05/16
 * Objet:   Configuration de Silex
 */

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Providers
$app->register(new \Silex\Provider\DoctrineServiceProvider());
$app->register(new \Silex\Provider\TwigServiceProvider(), array(
	'twig.path' => __DIR__ . '/../views'
));
$app->register(new \Silex\Provider\UrlGeneratorServiceProvider());

// Register DAOS
$app['dao.book'] = $app->share(function ($app)
{
	return new \Livre\DAO\BookDAO($app['db']);
});

$app['dao.author'] = $app->share(function ($app){
	return new \Livre\DAO\AuthorDAO($app['db']);
});

<?php
/**
 * Auteur:  christopher
 * Date:    03/05/16
 * Objet:   Fichier de configuration de l'application PHP en production
 */

$app['db.options'] = array(
	'driver'    => 'pdo_mysql',
	'dbname'    => 'mybooks',
	'host'      => 'localhost',
	'user'      => 'mybooks_user',
	'password'  => '',
	'charset'   => 'utf8',
	'port'      => '8889'
);

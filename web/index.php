<?php
/**
 * Auteur:  christopher
 * Date:    02/05/16
 * Objet:   Controleur frontal de l'application
 */

require __DIR__ . '/../vendor/autoload.php';

// Lancement de l'application
$app = new \Silex\Application();

require __DIR__. '/../app/app.php';
require __DIR__. '/../app/config/dev.php';
require __DIR__ . '/../app/route.php';

$app->run();
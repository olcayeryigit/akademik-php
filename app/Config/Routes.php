<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/db-test', 'DatabaseTest::index');

$routes->get('/', 'PageController::home'); // Ana sayfa
$routes->get('/blog', 'PageController::blog'); // Blog sayfası

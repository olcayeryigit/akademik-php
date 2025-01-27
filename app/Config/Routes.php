<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/db-test', 'DatabaseTest::index'); // Test için

$routes->get('/', 'PageController::home'); // Ana sayfa
$routes->get('/blog', 'PageController::blog'); // Blog sayfası
$routes->get('/login', 'PageController::login'); // Giriş sayfası
$routes->post('/login-action', 'PageController::loginAction'); // Giriş işlemi
$routes->get('/dashboard', 'PageController::dashboard'); // Dashboard sayfası
$routes->get('/blog', 'BlogController::index'); // Blog listesi
$routes->get('/blog/create', 'BlogController::create');  // Blog oluşturma
$routes->post('/blog/store', 'BlogController::store');   // Blog kaydetme
$routes->get('/blog/edit/(:num)', 'BlogController::edit/$1');
$routes->post('/blog/update', 'BlogController::update');
$routes->get('/blog/delete/(:num)', 'BlogController::delete/$1');  // Blog silme

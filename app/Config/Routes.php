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

//blog
$routes->get('/blog', 'BlogController::index'); // Blog listesi
$routes->get('/blog/create', 'BlogController::create');  // Blog oluşturma
$routes->post('/blog/store', 'BlogController::store');   // Blog kaydetme
$routes->get('/blog/edit/(:num)', 'BlogController::edit/$1');
$routes->post('/blog/update', 'BlogController::update');
$routes->get('/blog/delete/(:num)', 'BlogController::delete/$1');  // Blog silme
//duyuru
$routes->get('/announcement', 'AnnouncementController::index'); // 
$routes->get('/announcement/create', 'AnnouncementController::create');  
$routes->post('/announcement/store', 'AnnouncementController::store');  
$routes->get('/announcement/edit/(:num)', 'AnnouncementController::edit/$1');
$routes->post('/announcement/update', 'AnnouncementController::update');
$routes->get('/announcement/delete/(:num)', 'AnnouncementController::delete/$1');  
//about
$routes->get('/about', 'AboutController::index'); 
$routes->get('/about/edit/(:num)', 'AboutController::edit/$1');
$routes->post('/about/update', 'AboutController::update');
//mainContent
$routes->get('/mainContent', 'MainContentController::index'); 
$routes->get('/mainContent/edit/(:num)', 'MainContentController::edit/$1');
$routes->post('/mainContent/update','MainContentController::update');
//imageSection
$routes->get('/imageSection', 'ImageSectionController::index'); 
$routes->get('/imageSection/edit/(:num)', 'ImageSectionController::edit/$1');
$routes->post('/imageSection/update','ImageSectionController::update');
//links
$routes->get('educationLinks','EducationLinksController::index');
$routes->get('/educationLinks/edit/(:num)', 'EducationLinksController::edit/$1');
$routes->post('/educationLinks/update','EducationLinksController::update');
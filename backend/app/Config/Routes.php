<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::login');
$routes->get('/signup', 'Users::signup');
$routes->get('/moodboard', 'Users::moodboard');
$routes->get('/roadmap', 'Users::roadmap');
$routes->get('/menu', 'Users::menu');
$routes->get('/order', 'Users::order');
$routes->get('admin/dashboard', 'AdminDashboard::index');
$routes->get('menu', 'MenuController::index');
$routes->get('/accounts', 'Users::index');

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

$routes->get('menu', 'MenuController::index');
$routes->get('/menu', 'Users::menu');
$routes->get('/menu', 'MenuController::index');

$routes->get('/accounts', 'Users::index');
$routes->get('admin/accounts', 'AdminAccountsController::index');

$routes->get('admin/dashboard', 'AdminDashboard::index');

$routes->get('order', 'OrderController::index');
$routes->post('order/add', 'OrderController::add');
$routes->post('order/update/(:num)', 'OrderController::update/$1');
$routes->post('order/remove/(:num)', 'OrderController::remove/$1');
$routes->post('order/clear', 'OrderController::clear');
$routes->get('admin/orders', 'AdminOrdersController::orders');

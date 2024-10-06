<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'AuthController::login');
$routes->post('/auth/loginAuth', 'AuthController::loginAuth');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/auth/logout', 'AuthController::logout');

$routes->get('/siswa', 'SiswaController::index');
$routes->get('/siswa/create', 'SiswaController::create');
$routes->post('/siswa/store', 'SiswaController::store');
$routes->get('/siswa/edit/(:num)', 'SiswaController::edit/$1');
$routes->post('/siswa/update/(:num)', 'SiswaController::update/$1');
$routes->get('/siswa/delete/(:num)', 'SiswaController::delete/$1');




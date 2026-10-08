<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'TaskController::index');
$routes->get('tasks', 'TaskController::taskList');
$routes->get('profile', 'TaskController::profile');
$routes->get('about', 'TaskController::about');

// Auth (public)
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::attempt');
$routes->get('logout', 'Auth::logout');

// Protected pages (need login)
$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('customers', 'Customers::index');
    $routes->get('customers/new', 'Customers::newCustomer');
    $routes->post('customers/create', 'Customers::create');
    $routes->get('customers/edit/(:num)', 'Customers::edit/$1');
    $routes->post('customers/update/(:num)', 'Customers::update/$1');

    $routes->get('users', 'Users::index');
    $routes->get('users/new', 'Users::newUser');
    $routes->post('users/create', 'Users::create');
    $routes->get('users/edit/(:num)', 'Users::edit/$1');
    $routes->post('users/update/(:num)', 'Users::update/$1');
});

// Public
$routes->get('hello', 'Hello::index');
<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Public routes
$routes->get('/', 'Home::index');

$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::attemptLogin');
$routes->get('logout', 'Auth::logout');

// Protected customer routes
$routes->get(
    'customers',
    'CustomerAccounts::index',
    ['filter' => 'auth']
);

$routes->get(
    'customers/new',
    'CustomerAccounts::new',
    ['filter' => 'auth']
);

$routes->post(
    'customers',
    'CustomerAccounts::create',
    ['filter' => 'auth']
);

$routes->get(
    'customers/(:num)/edit',
    'CustomerAccounts::edit/$1',
    ['filter' => 'auth']
);

$routes->post(
    'customers/(:num)/edit',
    'CustomerAccounts::update/$1',
    ['filter' => 'auth']
);

// Protected user routes
$routes->get(
    'users',
    'UserAccounts::index',
    ['filter' => 'auth']
);

$routes->get(
    'users/new',
    'UserAccounts::new',
    ['filter' => 'auth']
);

$routes->post(
    'users',
    'UserAccounts::create',
    ['filter' => 'auth']
);

$routes->get(
    'users/(:num)/edit',
    'UserAccounts::edit/$1',
    ['filter' => 'auth']
);

$routes->post(
    'users/(:num)/edit',
    'UserAccounts::update/$1',
    ['filter' => 'auth']
);
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// routes landing page
$routes->get('/', 'Home');

// routes auth
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

//routes dashboard
$routes->get('/dashboard', 'Dashboard', ['filter' => 'auth']);
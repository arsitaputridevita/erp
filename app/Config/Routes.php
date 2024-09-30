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
$routes->get('/masterdata/jenistes', 'sdm\JenisTes\JenisTes::index');
$routes->get('/masterdata/jenistes/create', 'sdm\JenisTes\JenisTes::create', ['filter' => 'auth']);

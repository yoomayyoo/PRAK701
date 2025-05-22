<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login'); 
$routes->match(['get', 'post'], 'auth/login', 'Auth::login');
$routes->post('auth/login_process', 'Auth::login_process'); 
$routes->get('auth/logout', 'Auth::logout');

$routes->get('buku', 'Buku::index');
$routes->match(['get', 'post'], 'buku/create', 'Buku::create'); 

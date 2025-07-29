<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Landing routes
 $routes->get('/', 'Landing::index');
 $routes->get('/about_us', 'Landing::about_us');
 $routes->get('/services', 'Landing::services');
 $routes->get('/contact_us', 'Landing::contact_us');

// Admin routes
$routes->get('/admin/dashboard', 'Admin::index');

// Server side routes
$routes->post('/login', 'Auth::login');
$routes->post('/register', 'Auth::register');
$routes->post('/update_profile', 'Auth::update_profile');
$routes->post('/logout', 'Auth::logout');

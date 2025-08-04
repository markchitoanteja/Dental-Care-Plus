<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Landing routes
$routes->get('/', 'Landing::index');
$routes->get('/home', 'Landing::home');
$routes->get('/about_us', 'Landing::about_us');
$routes->get('/services', 'Landing::services');
$routes->get('/contact_us', 'Landing::contact_us');

// Admin routes
$routes->get('/admin/dashboard', 'Admin::index');

// Client routes
$routes->get('/client/dashboard', 'Client::dashboard');
$routes->get('/client/profile', 'Client::profile');
$routes->get('/client/appointments', 'Client::appointments');
$routes->get('/client/messages', 'Client::messages');

$routes->post('/client/update_profile', 'Client::update_profile');
$routes->post('/client/change_password', 'Client::change_password');
$routes->post('/client/add_appointment', 'Client::add_appointment');
$routes->post('/client/appointments/delete/(:num)', 'Client::delete_appointment/$1');
$routes->post('/client/messages/mark-read', 'Client::markMessageRead');
$routes->post('/client/messages/delete/(:num)', 'Client::delete_message/$1');

// Auth routes
$routes->post('/login', 'Auth::login');
$routes->post('/register', 'Auth::register');
$routes->post('/update_profile', 'Auth::update_profile');
$routes->post('/logout', 'Auth::logout');

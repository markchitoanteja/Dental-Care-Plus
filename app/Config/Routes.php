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
$routes->post('/client/update_profile', 'Client::update_profile');
$routes->post('/client/change_password', 'Client::change_password');

// Auth routes
$routes->post('/login', 'Auth::login');
$routes->post('/register', 'Auth::register');
$routes->post('/update_profile', 'Auth::update_profile');
$routes->post('/logout', 'Auth::logout');

// Appointment routes
$routes->post('/appointments/store', 'Appointments::store');

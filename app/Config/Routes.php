<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');

$routes->get('/plantduran/home', 'Home::index');

$routes->get('/tanaman', 'Tanaman::index');
$routes->get('/tanaman/create-tanaman', 'Tanaman::create');
$routes->get('/tanaman/(:any)', 'Tanaman::detail/$1');

$routes->get('/perawatan', 'Perawatan::index');

$routes->get('/galeri', 'Galeri::index');
$routes->get('/galeri/(:any)', 'Galeri::detail/$1');

$routes->get('/about', 'About::index');

$routes->get('/profile', 'Profile::index');

$routes->get('/admin', 'Admin::index');
$routes->delete('/admin/(:num)', 'admin::delete/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

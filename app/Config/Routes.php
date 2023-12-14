<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'admin\LoginController::index');
$routes->get('logout', 'admin\LoginController::logout');
$routes->post('auth', 'admin\LoginController::auth');

// routes group dashboard
$routes->group('dashboard', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'admin\DashboardController::index');
    $routes->get('profile-perusahaan', 'admin\ProfilePerusahanController::index');
    $routes->post('profile-perusahaan', 'admin\ProfilePerusahanController::update');

    $routes->get('produk', 'admin\ProdukController::index');
    $routes->post('produk', 'admin\ProdukController::save');
    $routes->post('edit-produk', 'admin\ProdukController::update');
    $routes->post('delete-produk', 'admin\ProdukController::delete');

    $routes->get('produksi', 'admin\ProduksiController::index');
    $routes->post('produksi', 'admin\ProduksiController::save');
    $routes->post('edit-produksi', 'admin\ProduksiController::update');
    $routes->post('delete-produksi', 'admin\ProduksiController::delete');
});

// routes group mobile
$routes->group('app', function ($routes) {
    $routes->get('/', 'Mobile\HomeController::index');
    $routes->get('profile', 'Mobile\ProfileController::index');
    $routes->get('scan', 'Mobile\ScannerController::index');
    $routes->get('result/(:any)', 'Mobile\ScannerController::result/$1');
    $routes->get('info-aplikasi', 'Mobile\InfoAplikasi::index');
});

/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

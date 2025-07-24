<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::home');

$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');


$routes->get('register', 'Register::index');
$routes->post('register/save', 'Register::save');



$routes->get('keranjang', 'Keranjang::index');


$routes->get('xl', 'Produk::xl');
$routes->get('axis', 'Produk::axis');
$routes->get('indosat', 'Produk::indosat');
$routes->get('smartfren', 'Produk::smartfren');
$routes->get('tri', 'Produk::tri');
$routes->get('telkomsel', 'Produk::telkomsel');


$routes->get('/Admin', 'Admin::index');

// CRUD Produk (hanya untuk admin)
$routes->get('produk', 'Produk::index');               // tampil semua produk
$routes->get('produk/tambah', 'Produk::tambah');       // tampil form tambah produk
$routes->post('produk/add', 'Produk::add');      // proses simpan produk
$routes->get('produk/edit/(:num)', 'Produk::tampilanedit/$1'); // tampil form edit
$routes->post('produk/update/(:num)', 'Produk::update/$1'); // proses update
$routes->get('produk/delete/(:num)', 'Produk::delete/$1');    // hapus produk



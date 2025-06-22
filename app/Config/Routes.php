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


$routes->get('xl', 'Home::xl');
$routes->get('axis', 'Home::axis');
$routes->get('indosat', 'Home::indosat');
$routes->get('smartfren', 'Home::smartfren');
$routes->get('tri', 'Home::tri');
$routes->get('telkomsel', 'Home::telkomsel');

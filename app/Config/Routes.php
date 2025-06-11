<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login');
$routes->get('register', 'Home::register');
$routes->get('xl', 'Home::xl');
$routes->get('axis', 'Home::axis');
$routes->get('indosat', 'Home::indosat');
$routes->get('smartfren', 'Home::smartfren');
$routes->get('tri', 'Home::tri');
$routes->get('telkomsel', 'Home::telkomsel');
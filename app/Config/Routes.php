<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home/(:any)', 'Home::$1');
$routes->get('recruitment/(:any)', 'Recruitment::$1');

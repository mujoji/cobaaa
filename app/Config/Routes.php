<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/ValoShop', 'ValoShop::index');
$routes->get('/MobaShop', 'MobaShop::index');
$routes->get('/COCShop', 'COCShop::index');
$routes->get('/PulsaShop', 'PulsaShop::index');
$routes->get('/ProductDetails', 'ProductDetails::index');
$routes->get('/Contact', 'Contact::index');

$routes->resource('register');
$routes->resource('login');

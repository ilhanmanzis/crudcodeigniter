<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/add', 'Mahasiswa::add');
$routes->get('/mahasiswa/edit/(:any)', 'Mahasiswa::edit/$1');
$routes->post('/mahasiswa/update', 'Mahasiswa::update');
$routes->post('/mahasiswa/save', 'Mahasiswa::save');
$routes->delete('/mahasiswa/delete/(:any)', 'Mahasiswa::delete/$1');

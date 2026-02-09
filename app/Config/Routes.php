<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/berita', function(){
    return view ('berita');
});

$routes->get('/berita/details', 'berita::detail');

$routes->get('/home', 'Home::index');

$routes->get('/mahasiswa/form', 'Mahasiswa::form');
$routes->post('/mahasiswa/proses', 'Mahasiswa::proses');
$routes->get('/siswa', 'Siswa::index');
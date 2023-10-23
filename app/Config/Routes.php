<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::index');


// INDEX
$routes->get('/preguntas', 'Preguntas::index');
$routes->get('/registro', 'Registro::index');
$routes->get('/registroMascota', 'RegistroMascota::index');

//USUARIO
$routes ->get('/registroMascota', 'ResgistroMascota::index');
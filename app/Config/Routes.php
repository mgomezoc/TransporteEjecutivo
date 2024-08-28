<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Ruta para el Sitemap
$routes->get('sitemap.xml', 'Sitemap::index');

// Grupo de rutas con prefijo de idioma
$routes->group('{locale}', ['filter' => 'language'], function ($routes) {
    $routes->get('/', 'PagesController::index');

    // Rutas en español
    $routes->get('historia', 'PagesController::historia', ['as' => 'historia-es']);
    $routes->get('servicios', 'PagesController::servicios', ['as' => 'servicios-es']);
    $routes->get('galeria', 'PagesController::galeria', ['as' => 'galeria-es']);
    $routes->get('clientes', 'PagesController::clientes', ['as' => 'clientes-es']);

    // Rutas en inglés
    $routes->get('history', 'PagesController::historia', ['as' => 'history-en']);
    $routes->get('services', 'PagesController::servicios', ['as' => 'services-en']);
    $routes->get('gallery', 'PagesController::galeria', ['as' => 'gallery-en']);
    $routes->get('clients', 'PagesController::clientes', ['as' => 'clients-en']);
});

// Redirección a idioma por defecto (español)
$routes->get('/', function () {
    return redirect()->to('/es');
});

// Ruta para manejar el error 404 personalizado
$routes->set404Override('ErrorsController::custom404');

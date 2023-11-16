<?php

use App\Controllers\News;
use CodeIgniter\Router\RouteCollection;

use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']); 
$routes->get('news/(:segment)', [News::class, 'show']);

## solo es parte del tutorial, modificar despues 
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

#estructura de las rutas

/**
* En esta parte se hara una descripcion de la aplicacion y se podra realizar
* el log-in
*
* ../landing_page/
* ../prospectos/
* ../prospectos/prospecto/
* ../prospectos/prospecto/ ->CRUD
*/

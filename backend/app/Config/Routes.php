<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('tarefas', 'TarefaController::index');
$routes->post('tarefas', 'TarefaController::create');
$routes->put('tarefas/(:num)', 'TarefaController::update/$1');
$routes->delete('tarefas/(:num)', 'TarefaController::delete/$1');

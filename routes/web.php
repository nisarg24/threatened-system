<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
// $routes->add(
//     'client',
//     new Route(
//         constant('URL_SUBFOLDER') . '/client',
//         array(
//             'controller' => 'ClientController',
//             'method'=>'index'
//         ),
//         array()
//     )
// );

$routes->add(
    'profile',
    new Route(
        constant('URL_SUBFOLDER') . '/client/profile',
        array(
            'controller' => 'ProfileController',
            'method'=>'view'
        )
    )
);
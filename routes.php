<?php

// $router->define([
//     ''              => 'controllers/index.php',
//     'about'         => 'controllers/about.php' ,
//     'about/culture' => 'controllers/about-culture.php',
//     'contact'       => 'controllers/contact.php',
//     'names'         => 'controllers/add-name.php' //only for post types
// ]);

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->post('names', 'controllers/add-name.php');

//var_dump($router->routes);
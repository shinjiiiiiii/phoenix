<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new Todo\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "TravelController@index");
$router->get('/login/', "UserController@showLogin");
$router->get('/register/', "UserController@showRegister");
$router->get('/logout/', "UserController@logout");
$router->get('/catalogue/', "CatalogueController@showAll");
$router->get('/reservation/:travel/', "CatalogueController@reservation");
$router->get('/list_reservation/', "CatalogueController@showAllReserv");
$router->get('/catalogue/:filter/', "FilterController@showAll");
$router->get('/admin/', "AdminController@showAdmin");


$router->post('/login/', "UserController@login");
$router->post('/store/', "TravelController@store");
$router->post('/register/', "UserController@register");
$router->post('/reservation/reservation', "CatalogueController@reservation_2");

$router->run();

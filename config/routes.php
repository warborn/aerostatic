<?php

$router = App::get_router();

$router->root(['to' => 'pages#index']);
$router->resources('air-ballons');
$router->add('travels', 'GET', ['to' => 'air-ballons#travels']);
$router->add('travels/{:id}/reservations/add', 'GET', ['to' => 'reservations#add']);
$router->add('reservations', 'POST', ['to' => 'reservations#create']);
$router->add('reservations', 'GET', ['to' => 'reservations#index']);
$router->add('reservations/{:id}/report', 'GET', ['to' => 'reservations#show_report']);
$router->resources('employees');
$router->resources('routes');
$router->resources('extras');
$router->resources('cost-accounts');
$router->resources('types');
$router->resources('prices');
$router->resources('users');
$router->add('login', 'POST', ['to' => 'sessions#create']);
$router->add('logout', 'DELETE', ['to' => 'sessions#destroy']);
$router->add('flights', 'GET', ['to' => 'flights#index']);
$router->add('flights/report', 'GET', ['to' => 'flights#index_report']);
// $router->resources('posts');
// $router->resources('air-ballons');
// $router->add('posts', GET, ['to' => 'posts#index']);
?>

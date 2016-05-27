<?php

$router = App::get_router();

$router->root(['to' => 'pages#index']);
$router->resources('air-ballons');
$router->resources('employees');
$router->resources('routes');
$router->resources('extras');
$router->resources('cost-accounts');
$router->resources('types');
// $router->resources('posts');
// $router->resources('air-ballons');
// $router->add('posts', GET, ['to' => 'posts#index']);

?>

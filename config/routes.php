<?php

$router = App::get_router();

$router->root(['to' => 'pages#index']);
$router->resources('air-ballons');
// $router->resources('posts');
// $router->resources('air-ballons');
// $router->add('posts', GET, ['to' => 'posts#index']);

?>

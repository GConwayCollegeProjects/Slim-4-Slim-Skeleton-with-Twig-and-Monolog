<?php

declare(strict_types=1);

use Slim\Psr7\Request;
use Slim\Psr7\Response;

$app->get('/', function(Request $request, Response $response, $args) {
    $response->getBody()->write("Now add  Hello / {name} to the URL");
    return $response;

});
<?php

declare(strict_types=1);

use Slim\Psr7\Request;
use Slim\Psr7\Response;

$app->get('/Hello', function(Request $request, Response $response, $args) {
    $response->getBody()->write("Hello World!");
    return $response;

});
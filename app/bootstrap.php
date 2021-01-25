<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;
use Slim\Handlers\Strategies\RequestHandler;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/../../vendor/autoload.php';

define('APP_ENV', $_ENV['APP_ENV'] ?? $_SERVER['APP_ENV'] ?? 'DEVELOPMENT');
$settings = (require __DIR__ . '/../app/settings.php')(APP_ENV);

// Set up dependencies
$containerBuilder = new ContainerBuilder();
if($settings['di_compilation_path']) {
    $containerBuilder->enableCompilation($settings['di_compilation_path']);
}
(require __DIR__ . '/../app/dependencies.php')($containerBuilder, $settings);

// Create app
AppFactory::setContainer($containerBuilder->build());

$app = AppFactory::create();

$twig = Twig::create('../app/views', ['cache' => '../var/cache']);

$app->add(TwigMiddleware::create($app, $twig));

$app->setBasePath("/app-skeleton/public");

// Register middleware
(require __DIR__ . '/../app/middleware.php')($app);

// Register routes
require __DIR__ . '/../app/routes.php';

// Run app
$app->run();
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Knp\Provider\ConsoleServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Rsh\Command\DbCommand;


$app = new Silex\Application();

$app->register(new ConsoleServiceProvider(), [
    'console.name'              => 'Silex Console',
    'console.version'           => '1.0.0',
    'console.project_directory' => __DIR__.'/.'
]);

$app->register(new DoctrineServiceProvider(), [
    'db.options' => [
        'driver' => 'pdo_mysql',
        'user' => 'root',
        'password' => null,
        'database' => 'silex',
    ],
]);

$application = $app['console'];
$application->add(new DbCommand());
$application->run();


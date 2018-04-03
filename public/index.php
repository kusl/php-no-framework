<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

$hello_world = new \ExampleApp\HelloWorld();
$hello_world->announce();



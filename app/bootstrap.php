<?php
/**
 * The bootstrap file creates and returns the container.
 */

use DI\ContainerBuilder; 

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/definitions.php';

$containerBuilder = new \DI\ContainerBuilder;
$containerBuilder->addDefinitions(__DIR__ . '/config.php');
$container = $containerBuilder->build();

$container->set('test', DI\create(App\Command\TestCommand::class)->constructor($container));
$container->set('connect', DI\create(App\Command\ConnectCommand::class)->constructor($container));
$container->set('client', DI\create(\App\Client::class)->constructor($ip, $port));
$container->set('cookie.set', DI\create(\App\Command\SetCookieCommand::class)->constructor($container));
$container->set('cookie.get', DI\create(\App\Command\GetCookieCommand::class)->constructor($container));
$container->set('cookie-url.set', DI\create(\App\Command\SetCookieForUrlCommand::class)->constructor($container));
$container->set('cookie-url.get', DI\create(\App\Command\GetCookieForUrlCommand::class)->constructor($container));
$container->set('navigate', DI\create(\App\Command\NavigateCommand::class)->constructor($container));
$container->set('google.form.email', DI\create(\App\Command\GoogleFormEmailCommand::class)->constructor($container));

//$container->set('service.cookies.import', DI\create(\App\Service\CookiesImport\Service::class)->constructor($container, $cookie));

return $container;
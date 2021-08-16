<?php

$container = require(__DIR__ . '/../app/bootstrap.php');

$app = new Silly\Application();	
$app->useContainer($container, $injectWithTypeHint = true);

$ip = '127.0.0.1';
$port = 7030;

$container->set('client', DI\create(\App\Client::class)->constructor($ip, $port));

$container->get('debug')->set_cur_script_path(__DIR__);

$container->get('browser')->navigate('wordpress.com');

$app->run();


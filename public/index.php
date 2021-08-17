<?php

$ip = '127.0.0.1';
$port = 7030;

$container = require(__DIR__ . '/../app/bootstrap.php');

$app = new Silly\Application();	
$app->useContainer($container, $injectWithTypeHint = true);

$invoker = new Invoker\Invoker(null, $container);

$invoker->call('navigate', ['bing.com']);
$invoker->call('google.form.email', ['contunko@gmail.com']);

$app->run();


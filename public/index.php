<?php

$container = require(__DIR__ . '/../app/bootstrap.php');

$app = new Silly\Application();	
$app->useContainer($container, $injectWithTypeHint = false);

$invoker = new Invoker\Invoker(null, $container);

$account = App\Model\Account::getOne();

$invoker->call('browser.settings', [$account]);
$invoker->call('google.login.service', [$account]);

/*
$invoker = new Invoker\Invoker(null, $container);
$invoker->call('navigate', ['bing.com']);
$invoker->call('google.form.email', ['contunko@gmail.com']);
*/

$app->run();


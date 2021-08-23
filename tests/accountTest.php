<?php

$container = require __DIR__ . '/../app/bootstrap.php';

$app = new Silly\Application();
$app->useContainer($container, $injectWithTypeHint = true);

$db = $container->get('db');

$account = App\Model\Account::getOne();

var_dump($account);

$app->run();
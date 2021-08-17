<?php

$container = require __DIR__ . '/../app/bootstrap.php';

$app = new Silly\Application();
$app->useContainer($container, $injectWithTypeHint = true);

$db = $container->get('db');

$project = App\Model\Project::where('label', 'elslots')::getOne();

$attendee = new App\Model\Attendee;
$attendee->projectId = $project->id;
$attendee->email = 'test@gmail.com';
$attendee->save();

$app->run();
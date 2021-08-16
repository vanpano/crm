<?php

use \Psr\Container\ContainerInterface;
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

return [
	Twig_Environment::class => function () {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/CRM/Views');
        return new \Twig\Environment($loader);
    },
	
    'browser' => function (ContainerInterface $c) {
        return new \Xhe\XheBrowser($c->get('client'));
    },

    'anchor' => function (ContainerInterface $c) {
        return new \Xhe\XheAnchor($c->get('client'));
    },
	
	'textarea' => function (ContainerInterface $c) {
        return new \Xhe\XheTextarea($c->get('client'));
    },
	
	'webpage' => function (ContainerInterface $c) {
        return new \Xhe\XheWebpage($c->get('client'));
    },
	
	'input' => function (ContainerInterface $c) {
        return new \Xhe\XheInput($c->get('client'));
    },
	
	'button' => function (ContainerInterface $c) {
        return new \Xhe\XheButton($c->get('client'));
    },
	
	'checkbutton' => function (ContainerInterface $c) {
        return new \Xhe\XheCheckbutton($c->get('client'));
    },
	
	'div' => function (ContainerInterface $c) {
        return new \Xhe\XheDiv($c->get('client'));
    },
	
	'span' => function (ContainerInterface $c) {
        return new \Xhe\XheSpan($c->get('client'));
    },
	
	'image' => function (ContainerInterface $c) {
        return new \Xhe\XheImage($c->get('client'));
    },
	
	'btn' => function (ContainerInterface $c) {
        return new \Xhe\XheInputbutton($c->get('client'));
    },
	
	'element' => function (ContainerInterface $c) {
        return new \Xhe\XheElement($c->get('client'));
    },
	
	'keyboard' => function (ContainerInterface $c) {
        return new \Xhe\XheKeyboard($c->get('client'));
    },
	
	'mouse' => function (ContainerInterface $c) {
        return new \Xhe\XheMouse($c->get('client'));
    },
	
	'debug' => function (ContainerInterface $c) {
        return new \Xhe\XheDebug($c->get('client'));
    },
	
	'application' => function (ContainerInterface $c) {
        return new \Xhe\XheApplication($c->get('client'));
    },
];
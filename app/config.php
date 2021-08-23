<?php

use \Psr\Container\ContainerInterface;

return [
	/*
	\App\Command\ClearCookiesCommand::class => function (ContainerInterface $c) {
		return new \App\Command\ClearCookiesCommand($c);
	},
	*/
	
	/*
	\App\Command\ClearBrowserCommand::class => function (ContainerInterface $c) {
		return new \App\Command\ClearBrowserCommand($c);
	},
	*/
	
	/*
	\App\Command\ProfileLoadCommand::class => function (ContainerInterface $c) {
		return new \App\Command\ProfileLoadCommand($c);
	},
	*/
	
	
	\App\Service\ProxyInit::class => function ($command) {
		return new\App\Service\ProxyInit($command);
	},
	
	
	\App\Service\CookiesExport::class => function ($command) {
		return new\App\Service\CookiesExport($command);
	},
	
	\App\Service\CookiesImport::class => function ($command) {
		return new\App\Service\CookiesImport($command);
	},
	
	\App\Service\LoginService::class => function ($command) {
		return new\App\Service\LoginService($command);
	},
	
	\App\Command\GoogleLoginCommand::class => function (ContainerInterface $c) {
		return new \App\Command\GoogleLoginCommand($c);
	},
	
	\App\Command\PinterestLoginCommand::class => function (ContainerInterface $c) {
		return new \App\Command\PinterestLoginCommand($c);
	},
	
	\App\Command\SetCookieForUrlCommand::class => function (ContainerInterface $c) {
		return new \App\Command\SetCookieForUrlCommand($c);
	},
	
	\App\Command\NavigateCommand::class => function (ContainerInterface $c) {
		return new \App\Command\NavigateCommand($c);
	},
	
	\App\Command\GoogleFormEmailCommand::class => function (ContainerInterface $c) {
		return new \App\Command\GoogleFormEmailCommand($c);
	},
	
	\App\Command\GetCookieForUrlCommand::class => function (ContainerInterface $c) {
		return new \App\Command\GetCookieForUrlCommand($c);
	},
	
	\App\Command\GetCookieCommand::class => function (ContainerInterface $c) {
		return new \App\Command\GetCookieCommand($c);
	},
	
	\App\Command\SetCookieCommand::class => function (ContainerInterface $c) {
		return new \App\Command\SetCookieCommand($c);
	},
	
	\App\Command\TestCommand::class => function (ContainerInterface $c) {
		return new \App\Command\TestCommand($c);
	},
	
	\App\Command\ConnectCommand::class => function (ContainerInterface $c) {
		return new \App\Command\ConnectCommand($c);
	},
	
	/* XHE objects to be preloaded */

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
    }
];
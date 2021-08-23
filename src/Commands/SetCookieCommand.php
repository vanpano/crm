<?php
namespace App\Command;

class SetCookieCommand extends Command {
	function __invoke($cookie, $url = false) {
		if ($url)
			$this->container->call('navigate', [$url]);

		$this->container->get('browser')->set_cookie($cookie);
		$this->container->get('browser')->wait_js();
	}
}
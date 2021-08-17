<?php
namespace App\Command;

class SetCookieCommand extends Command {
	function __invoke($cookie) {
		$this->container->get('browser')->set_cookie($cookie);
		$this->container->get('browser')->wait_js();
	}
}
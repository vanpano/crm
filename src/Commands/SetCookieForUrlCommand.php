<?php
namespace App\Command;

class SetCookieForUrlCommand extends Command {
	function __invoke($cookie, $url) {
		$this->container->get('browser')->set_cookie_for_url($url, "", $cookie);
		$this->container->get('browser')->wait_js();
	}
}
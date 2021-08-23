<?php
namespace App\Command;

class GetCookieForUrlCommand extends Command {
	function __invoke($url) {
		return $this->container->get('browser')->get_cookie_for_url($url, "");
	}
}
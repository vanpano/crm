<?php
namespace App\Command;

class GetCookieCommand extends Command {
	function __invoke() {
		return $this->container->get('browser')->get_cookie();
	}
}
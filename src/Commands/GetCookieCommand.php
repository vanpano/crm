<?php
namespace App\Command;

class GetCookieCommand extends Command {
	function __invoke($url = true) {
		$browser = $this->container->get('browser');
		
		if ($url)
			$this->container->call('navigate', [$url]);

		
		return $browser->get_cookie();
	}
}
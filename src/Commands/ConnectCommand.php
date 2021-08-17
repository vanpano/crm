<?php

namespace App\Command;

use \Xhe\XheBrowser;

class ConnectCommand extends Command {
	function __invoke($ip, $port) {
		$browser = new \Xhe\XheBrowser($ip . ":" . $port);
		
		if ($browser->get_ready_state())
			return true;
		return false;
	}
}
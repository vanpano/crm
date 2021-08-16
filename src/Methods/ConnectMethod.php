<?php

namespace demo;

use \Xhe\XheBrowser;

class ConnectMethod {
	function __invoke($ip, $port) {
		$browser = new \Xhe\XheBrowser($ip . ":" . $port);
		
		$browser->navigate('about:blank');
		return true;
	}
}
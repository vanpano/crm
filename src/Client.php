<?php

namespace App;

class Client {
	public $ip;
	public $port;
	
	function __construct($ip, $port) {
		$this->ip = $ip;
		$this->port = $port;
	}
	
	function __toString() {
		return $this->ip . ":" . $this->port;
	}
}
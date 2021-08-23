<?php

namespace App\Service;

class Service {
	public $command;
	public $result;
		
	function __construct($command) {
		$this->command = $command;
	}
}
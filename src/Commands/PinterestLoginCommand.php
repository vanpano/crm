<?php

namespace App\Command;

class PinterestLoginCommand extends Command {
	function __invoke($email, $password) {
		return $this->login($email, $password);
	}
	
	public function login($email, $password) {
		$this->container->call('navigate', ['pinterest.ru']);
		
		return false;
	}
}
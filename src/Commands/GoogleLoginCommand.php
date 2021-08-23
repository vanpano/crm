<?php

namespace App\Command;

class GoogleLoginCommand extends Command {
	function __invoke($email, $password, $rEmail) {
		return $this->login($email);
	}
	
	function login($email) {
		$this->container->get('browser')->navigate('accounts.google.com');
		$this->container->get('browser')->wait_js();
		
		$this->container->get('input')->get_by_number(0)->send_input($email);
		$this->container->get('browser')->wait_js();
		
		return true;
	}
}
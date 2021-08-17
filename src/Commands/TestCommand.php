<?php

namespace App\Command;

class TestCommand extends Command {
	function __invoke($name, $seUrl) {
		
		$this->container->get('browser')->navigate($seUrl);
		$this->container->get('browser')->wait_js();
		
		$this->container->get('input')->get_by_number(0)->send_input('Hello ' . $name . '!');
		$this->container->get('browser')->wait_js();
		
		$this->container->get('keyboard')->send_key(13);
		$this->container->get('browser')->wait_js();
	}
}
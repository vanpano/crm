<?php
namespace App\Command;

class GoogleFormEmailCommand extends Command {
	function __invoke($email) {
		$this->container->get('input')->get_by_number(0)->send_input($email);
		$this->container->get('browser')->wait_js();
	}
}
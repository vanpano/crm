<?php
namespace App\Command;

class NavigateCommand extends Command {
	function __invoke($url) {
		$this->container->get('browser')->navigate($url);
		$this->container->get('browser')->wait_js();
	}
}
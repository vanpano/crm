<?php
namespace App\Service;

class CookiesImportService extends Service {
	
	function __invoke($cookies) {
		$this->import($cookies);
	}
	
	private function import($cookies) {
		$this->command->__invoke($cookies->entry, $cookies->url);
	}
}
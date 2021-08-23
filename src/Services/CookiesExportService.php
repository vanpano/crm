<?php
namespace App\Service;

class CookiesExportService extends Service {
	
	function __invoke($cookies) {
		$this->export($cookies);
	}
	
	private function export($cookies) {
		$this->command->__invoke($cookies->url);
	}
}
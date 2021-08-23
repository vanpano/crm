<?php

namespace App\Service;

class LoginService extends Service {
	function __invoke($account) {
		if (is_array($account) && count($account) > 0) {
			while($acc = array_pop($account)) {
				$this->login($acc);
			}
		} else {
			return $this->login($account);
		}
		
	}
	
	function login($account) : bool {
		$account->is_working = 1;
		
		$this->settings($account);
		
		if($account->cookie)
			$this->command->container->call('service.cookies.import', [$account->cookie]);

			$result = $this->command->__invoke($account->email, $account->password, $account->rEmail);
		
		$account->is_working = 0;
		$account->used += 1;
		
		if ($this->result = $result) {
			$account->loginAt = date("Y-m-d H:i:s");
			$this->command->container->call('service.cookies.export', [$account->cookie]);
		}
			
		$account->save();
		
		return $this->result;
	}
}
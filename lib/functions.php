<?php

function get_xhe_port($settings_path) {
	
	if (!realpath($settings_path)) {
		printf("Not a real path!");
		return false;
	}
	
	$port = (int) file_get_contents($settings_path . DIRECTORY_SEPARATOR . "port.txt");
	
	return $port;
}

function is_assoc(array $arr) {
	if (array() === $arr) return false;
	return array_keys($arr) !== range(0, count($arr) - 1);
}

function cmd($command, $ping = true) {
	if (!$ping)
		$pCommand = '';
	else $pCommand = ' & ' . 'ping -n -f -w 1 5000 192.168.254.254 >nul';
	
	$command .= $pCommand;
	
	$handle = popen($command, 'w');
	$read = fread($handle, 2096);
	pclose($handle);
}

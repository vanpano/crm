<?php


use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;

use \demo\ConnectMethod;

$container = require __DIR__ . '/app/bootstrap.php';

$app = new Silly\Application();
$app->useContainer($container, $injectWithTypeHint = true);

$app->command('demo:connect [ip] [port]', function (InputInterface $input, OutputInterface $output) {
	$ip = $input->getArgument('ip');
	$port = $input->getArgument('port');

	$connected = (new demo\ConnectMethod)($ip, $port);
	
	if (!preg_match("#404#i", $connected)) {
		printf("Successfully connected to the client %s:%s\n", $ip, $port);
		return true;
	} 

	return false;
});

$app->command('demo:client [port] [script]', function(InputInterface $input, OutputInterface $output) {
	$port = $input->getArgument('port');
	$script = $input->getArgument('script');
	
	$command = '@START /b "XHE" "' . XHE_EXE . '" /port:' . $port . ($script ? ' /script:"' . $script . '"' : '');
	
	cmd($command);
});


$app->command('greet [name] [--yell]', function ($name, $yell, OutputInterface $output) {
    if ($name) 
        $text = 'Hello, ' . $name;
    else $text = 'Hello';
    
    if ($yell) 
        $text = strtoupper($text);
    
    $output->writeln($text);
});

$ip = '127.0.0.1';

$container->set('client', DI\create(Client::class)
	->constructor($ip, get_xhe_port(XHE_DIR . DIRECTORY_SEPARATOR . 'Settings')
	+ 1)
	);

$app->run();
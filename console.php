<?php


use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use App\Command\TestCommand;
use App\Command\ConnectCommand;
use App\Client;

$container = require __DIR__ . '/app/bootstrap.php';

$ip = '127.0.0.1';
$port = get_xhe_port(XHE_DIR . DIRECTORY_SEPARATOR . 'Settings');

$container->set('client', DI\create(Client::class)
	->constructor($ip, $port)
);

$app = new Silly\Application();
$app->useContainer($container, $injectWithTypeHint = true);
$invoker = new Invoker\Invoker(null, $container);

$app->command('test [name] [url]', function (InputInterface $input, OutputInterface $output) use ($invoker) {
	$name = $input->getArgument('name');
	$url = $input->getArgument('url');
	
	return $invoker->call(App\Command\TestCommand::class, [$name, $url]);
});

$app->command('connect [ip] [port]', function (InputInterface $input, OutputInterface $output) use ($invoker) {
	$ip = $input->getArgument('ip');
	$port = $input->getArgument('port');
	
	$connected = $invoker->call(App\Command\ConnectCommand::class, [$ip, $port]);
	
	if (!preg_match("#404#i", $connected)) {
		$output->write("Successfully connected to the client $ip:$port\n");
		return true;
	} 

	return false;
});

$app->command('client [port] [script]', function(InputInterface $input, OutputInterface $output) {
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




$app->run();
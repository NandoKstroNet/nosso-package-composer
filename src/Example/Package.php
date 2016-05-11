<?php
namespace CodeExpertsLearning\Example;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Package 
{
	public function __construct(Logger $log, StreamHandler $streamHandler)
	{
		$log->pushHandler($streamHandler);

		$log->warning('Nosso package');
		$log->error('Com composer');
	}
}
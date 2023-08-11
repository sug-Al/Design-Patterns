<?php
	
require __DIR__ . '/vendor/autoload.php';

use Strategy\Client;
use Observer\StateChanger;

error_reporting(E_ALL);

echo "1. Strategy Pattern".PHP_EOL;
echo "2. Observer Pattern".PHP_EOL;
echo "Enter Pattern to test: ";
$option = readline();

switch($option) {
    case 1:
        $client = new Client;
		$client->sortData();
		$client->searchDatum();
        break;
    
    case 2:
        $observerClient = new StateChanger;
		$observerClient->changeStateOfPublisherOne();
		$observerClient->changeStateOfPublisherTwo();
        break;

    default:
        break;
}
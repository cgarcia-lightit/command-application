<?php

use CommandApp\Cinema\Commands\Search\Infrastructure\SearcherCommand;
use CommandApp\Cinema\Commands\Shared\Infrastructure\OmbdRepository;
use Dotenv\Dotenv;
use GuzzleHttp\Client;
use Symfony\Component\Console\Application;

require_once('./vendor/autoload.php');

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$application  = new Application('My first command application', '0.1.0');

$application->add(new SearcherCommand(
    new OmbdRepository(new Client()))
);


$application->run();

<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dshafik\GuzzleHttp\VcrHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Traum\Client;

function createClient($fixture, array &$container)
{
    $vcr = VcrHandler::turnOn(__DIR__ . '/Fixtures/' . $fixture . '.json');
    $stack = HandlerStack::create($vcr);

    $history = Middleware::history($container);
    $stack->push($history);

    return Client::create(['handler' => $stack]);
}

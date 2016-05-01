<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dshafik\GuzzleHttp\VcrHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Traum\Client;

// Make HHVM happy
defined('JSON_OBJECT_AS_ARRAY') || define('JSON_OBJECT_AS_ARRAY', true);

function createClient($fixture, array &$container)
{
    $vcr = VcrHandler::turnOn(__DIR__ . '/Fixtures/' . $fixture . '.json');
    $stack = HandlerStack::create($vcr);

    $history = Middleware::history($container);
    $stack->push($history);

    return Client::create(['handler' => $stack]);
}

function compare(\Traum\Entity $entity, $transport, $assertion)
{
    $request = json_decode((string) $transport->getBody(), JSON_OBJECT_AS_ARRAY);
    $assertion->assertEquals($entity->getRawData(), $request);
}

function compareCollection(\Traum\Collection $collection, $transport, $assertion)
{
    $request = json_decode((string) $transport->getBody(), JSON_OBJECT_AS_ARRAY);
    $assertion->assertEquals($collection->getData(), $request);
}

function fixture($name)
{
    $content = file_get_contents(__DIR__ . '/Fixtures/' . $name . '.json');

    return json_decode($content, JSON_OBJECT_AS_ARRAY);
}

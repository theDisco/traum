<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dshafik\GuzzleHttp\VcrHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Traum\Client;

/**
 * @param $fixture
 * @param array $container
 * @return Client
 */
function createClient($fixture, array &$container)
{
    $vcr = VcrHandler::turnOn(__DIR__ . '/Fixtures/' . $fixture . '.json');
    $stack = HandlerStack::create($vcr);

    $history = Middleware::history($container);
    $stack->push($history);

    return Client::create(['handler' => $stack]);
}

/**
 * @param \Traum\Entity $entity
 * @param $transport
 * @param $assertion
 */
function compare(\Traum\Entity $entity, $transport, $assertion)
{
    $request = json_decode((string)$transport->getBody(), JSON_OBJECT_AS_ARRAY);
    $assertion->assertEquals($entity->getRawData(), $request);
}

/**
 * @param \Traum\Collection $collection
 * @param $transport
 * @param $assertion
 */
function compareCollection(\Traum\Collection $collection, $transport, $assertion)
{
    $request = json_decode((string)$transport->getBody(), JSON_OBJECT_AS_ARRAY);
    $assertion->assertEquals($collection->getData(), $request);
}

/**
 * @param $name
 * @return mixed
 */
function fixture($name)
{
    $content = file_get_contents(__DIR__ . '/Fixtures/' . $name . '.json');

    return json_decode($content, JSON_OBJECT_AS_ARRAY);
}

<?php

namespace Traum;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception;
use GuzzleHttp\Psr7;
use League\Fractal;
use Traum\Exception\InvalidRequest;

/**
 * Class Resource
 * @package Traum
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
abstract class Resource
{
    /**
     * @var \League\Fractal\Manager
     */
    private $fractalManager;

    /**
     * @var \GuzzleHttp\Client
     */
    private $httpClient;

    /**
     * Resource constructor.
     * @param \GuzzleHttp\Client $httpClient
     */
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param $entity
     * @param \League\Fractal\TransformerAbstract $transformer
     * @return \League\Fractal\Scope
     */
    protected function transformEntity($entity, Fractal\TransformerAbstract $transformer)
    {
        $resource = new Fractal\Resource\Item($entity, $transformer);

        return $this->getFractalManager()->createData($resource);
    }

    /**
     * @return Fractal\Manager
     */
    private function getFractalManager()
    {
        if (!$this->fractalManager) {
            $this->fractalManager = new Fractal\Manager;
            $this->fractalManager->setSerializer(new Fractal\Serializer\ArraySerializer);
        }

        return $this->fractalManager;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $headers
     * @param string $body
     * @return \Psr\Http\Message\ResponseInterface
     * @throws InvalidRequest
     */
    protected function request($method, $uri, array $headers = [], $body = null)
    {
        $request = new Psr7\Request($method, $uri, $headers, $body);

        try {
            return $this->httpClient->send($request);
        } catch (Exception\ClientException $e) {
            throw InvalidRequest::create($e->getResponse());
        }
    }
}

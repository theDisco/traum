<?php

namespace Traum;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception;
use GuzzleHttp\Psr7;
use League\Fractal;
use Traum\Transformer;
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
     * @param \Traum\Entity $entity
     * @param Transformer $transformer
     * @return \League\Fractal\Scope
     */
    protected function transformEntity(Entity $entity, Transformer $transformer)
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

    /**
     * @param string $uri
     * @return array
     * @throws \Traum\Exception\InvalidRequest
     */
    protected function executeGet($uri)
    {
        $response = $this->request('GET', $uri);
        $body = $response->getBody()->getContents();

        return json_decode($body, JSON_OBJECT_AS_ARRAY);
    }

    /**
     * @param string $uri
     * @param \Traum\Entity $entity
     * @param Transformer $transformer
     * @return array
     * @throws \Traum\Exception\InvalidRequest
     */
    protected function executePost($uri, Entity $entity, Transformer $transformer)
    {
        return $this->executeWrite('POST', $uri, $entity, $transformer);
    }

    /**
     * @param string $uri
     * @param \Traum\Entity $entity
     * @param Transformer $transformer
     * @return array
     * @throws \Traum\Exception\InvalidRequest
     */
    protected function executePatch($uri, Entity $entity, Transformer $transformer)
    {
        return $this->executeWrite('PATCH', $uri, $entity, $transformer);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param \Traum\Entity $entity
     * @param Transformer $transformer
     * @return array
     * @throws \Traum\Exception\InvalidRequest
     */
    private function executeWrite($method, $uri, Entity $entity, Transformer $transformer)
    {
        $data = $this->transformEntity($entity, $transformer);
        $response = $this->request($method, $uri, [], $data->toJson());
        $body = $response->getBody()->getContents();

        return json_decode($body, JSON_OBJECT_AS_ARRAY);
    }
}

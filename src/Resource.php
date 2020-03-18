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
 *
 * @package Traum
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
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
     *
     * @param \GuzzleHttp\Client $httpClient
     */
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param \Traum\Entity $entity
     * @param Transformer   $transformer
     *
     * @return \League\Fractal\Scope
     */
    protected function transformEntity(Entity $entity, Transformer $transformer)
    {
        $resource = new Fractal\Resource\Item($entity, $transformer);

        return $this->getFractalManager()->createData($resource);
    }

    /**
     * @param \Traum\Collection $collection
     * @param Transformer       $transformer
     *
     * @return \League\Fractal\Scope
     */
    protected function transformCollection(Collection $collection, Transformer $transformer)
    {
        $resource = new Fractal\Resource\Collection($collection, $transformer);

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
     * @param array  $headers
     * @param string $body
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws Exception\GuzzleException
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
     *
     * @return array
     *
     * @throws Exception\GuzzleException
     * @throws InvalidRequest
     */
    protected function executeGet($uri)
    {
        $response = $this->request('GET', $uri);
        $body = $response->getBody()->getContents();

        return json_decode($body, JSON_OBJECT_AS_ARRAY);
    }

    /**
     * @param  string             $uri
     * @param  \Traum\Entity      $entity
     * @param  \Traum\Transformer $transformer
     * @return array
     * @throws \Traum\Exception\InvalidRequest
     * @throws Exception\GuzzleException
     */
    protected function executePost($uri, Entity $entity, Transformer $transformer)
    {
        return $this->executeWrite('POST', $uri, $entity, $transformer);
    }

    /**
     * @param string             $uri
     * @param \Traum\Collection  $collection
     * @param \Traum\Transformer $transformer
     *
     * @return array
     *
     * @throws InvalidRequest
     * @throws Exception\GuzzleException
     */
    protected function executePostForCollection($uri, Collection $collection, Transformer $transformer)
    {
        return $this->executeWriteForCollection('POST', $uri, $collection, $transformer);
    }

    /**
     * @param string             $uri
     * @param \Traum\Collection  $collection
     * @param \Traum\Transformer $transformer
     *
     * @return array
     *
     * @throws InvalidRequest
     * @throws Exception\GuzzleException
     */
    protected function executePatchForCollection($uri, Collection $collection, Transformer $transformer)
    {
        return $this->executeWriteForCollection('PATCH', $uri, $collection, $transformer);
    }

    /**
     * @param string             $uri
     * @param \Traum\Entity      $entity
     * @param \Traum\Transformer $transformer
     *
     * @return array
     *
     * @throws \Traum\Exception\InvalidRequest
     * @throws Exception\GuzzleException
     */
    protected function executePatch($uri, Entity $entity, Transformer $transformer)
    {
        return $this->executeWrite('PATCH', $uri, $entity, $transformer);
    }

    /**
     * @param  string             $uri
     * @param  \Traum\Entity      $entity
     * @param  \Traum\Transformer $transformer
     * @return array
     * @throws \Traum\Exception\InvalidRequest
     * @throws Exception\GuzzleException
     */
    protected function executePut($uri, Entity $entity, Transformer $transformer)
    {
        return $this->executeWrite('PUT', $uri, $entity, $transformer);
    }

    /**
     * @param string        $method
     * @param string        $uri
     * @param \Traum\Entity $entity
     * @param Transformer   $transformer
     *
     * @return array
     *
     * @throws Exception\GuzzleException
     * @throws InvalidRequest
     */
    private function executeWrite($method, $uri, Entity $entity, Transformer $transformer)
    {
        $data = $this->transformEntity($entity, $transformer);
        $response = $this->request($method, $uri, [], $data->toJson());
        $body = $response->getBody()->getContents();

        return json_decode($body, JSON_OBJECT_AS_ARRAY);
    }

    /**
     * @param string            $method
     * @param string            $uri
     * @param \Traum\Collection $collection
     * @param Transformer       $transformer
     *
     * @return array
     *
     * @throws \Traum\Exception\InvalidRequest
     * @throws Exception\GuzzleException
     */
    private function executeWriteForCollection($method, $uri, Collection $collection, Transformer $transformer)
    {
        $data = $this->transformCollection($collection, $transformer);
        $response = $this->request($method, $uri, [], json_encode($data->toArray()['data']));
        $body = $response->getBody()->getContents();

        return json_decode($body, JSON_OBJECT_AS_ARRAY);
    }
}

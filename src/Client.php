<?php

namespace Traum;

use GuzzleHttp\Client as HttpClient;

/**
 * Class Client
 * @package Traum
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Client
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * Client constructor.
     * @param HttpClient $httpClient
     */
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param array $config
     * @return \Traum\Client
     */
    public static function create(array $config = [])
    {
        $clientConfig = [
            'base_uri' => 'https://clientapi.traum-ferienwohnungen.de',
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ]
        ];

        if (isset($config['baseUri'])) {
            $clientConfig['base_uri'] = $config['baseUri'];
        }

        if (isset($config['headers'])) {
            $clientConfig['headers'] = $config['headers'];
        }

        if (isset($config['auth'])) {
            $clientConfig['auth'] = $config['auth'];
        }

        if (isset($config['handler'])) {
            $clientConfig['handler'] = $config['handler'];
        }

        return new self(new HttpClient($clientConfig));
    }

    /**
     * @return \Traum\Resource\Register
     */
    public function createRegisterResource()
    {
        return new Resource\Register($this->httpClient);
    }

    /**
     * @return \Traum\Resource\Customer
     */
    public function createCustomerResource()
    {
        return new Resource\Customer($this->httpClient);
    }

    /**
     * @return \Traum\Resource\Listing
     */
    public function createListingResource()
    {
        return new Resource\Listing($this->httpClient);
    }

    /**
     * @return \Traum\Resource\PriceLogic
     */
    public function createPriceLogicResource()
    {
        return new Resource\PriceLogic($this->httpClient);
    }

    /**
     * @return Resource\PriceOption
     */
    public function createPriceOptionResource()
    {
        return new Resource\PriceOption($this->httpClient);
    }

    /**
     * @return \Traum\Service\Listing
     */
    public function createListingService()
    {
        return new Service\Listing($this);
    }

    /**
     * @return \Traum\Service\Picture
     */
    public function createPictureService()
    {
        return new Service\Picture($this);
    }
}

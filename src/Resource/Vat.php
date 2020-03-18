<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class Vat
 *
 * @package Traum\Resource
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Vat extends Resource
{
    /**
     * @param  int $customerId
     * @return \Traum\Entity\Vat
     * @throws \Traum\Exception\InvalidRequest
     */
    public function get($customerId)
    {
        $uri = sprintf('/vat/%d', $customerId);
        $response = $this->request('GET', $uri);
        $body = $response->getBody()->getContents();

        return new Entity\Vat(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param  int               $customerId
     * @param  \Traum\Entity\Vat $vat
     * @return \Traum\Entity\Listing
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patch($customerId, Entity\Vat $vat)
    {
        // TODO remove code duplication
        $uri = sprintf('/vat/%d', $customerId);
        $data = $this->transformEntity($vat, new Transformer\Vat);
        $response = $this->request('PATCH', $uri, [], $data->toJson());
        $body = $response->getBody()->getContents();

        return new Entity\Listing(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }
}

<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class Register
 *
 * @package Traum\Resource
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Register extends Resource
{
    /**
     * @param \Traum\Entity\Register $register
     * @return \Traum\Entity\Register
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Traum\Exception\InvalidRequest
     */
    public function post(Entity\Register $register)
    {
        $uri = '/register';
        $data = $this->transformEntity($register, new Transformer\Register);
        $response = $this->request('POST', $uri, [], $data->toJson());
        $body = $response->getBody()->getContents();

        return new Entity\Register(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }
}

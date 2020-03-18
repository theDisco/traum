<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class Address
 *
 * @package Traum\Resource
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Address extends Resource
{
    /**
     * @param  int $listingId
     * @return \Traum\Entity\Address
     * @throws \Traum\Exception\InvalidRequest
     */
    public function get($listingId)
    {
        $uri = sprintf('/address/%d', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\Address($body);
    }

    /**
     * @param  int                   $listingId
     * @param  \Traum\Entity\Address $address
     * @return \Traum\Entity\Address
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patch($listingId, Entity\Address $address)
    {
        $uri = sprintf('/address/%d', $listingId);
        $body = $this->executePatch($uri, $address, new Transformer\Address);

        return new Entity\Address($body);
    }
}

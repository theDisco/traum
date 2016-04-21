<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class PriceOption
 * @package Traum\Resource
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class PriceOption extends Resource
{
    /**
     * @param int $listingId
     * @return \Traum\Entity\PriceOption
     * @throws \Traum\Exception\InvalidRequest
     */
    public function get($listingId)
    {
        $uri = sprintf('/price-option/%d', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\PriceOption($body);
    }

    /**
     * @param int $listingId
     * @param \Traum\Entity\PriceOption $priceOption
     * @return \Traum\Entity\PriceOption
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patch($listingId, Entity\PriceOption $priceOption)
    {
        $uri = sprintf('/price-option/%d', $listingId);
        $body = $this->executePatch($uri, $priceOption, new Transformer\PriceOption);

        return new Entity\PriceOption($body);
    }
}

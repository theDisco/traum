<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class PriceLogic
 * @package Traum\Resource
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class PriceLogic extends Resource
{
    /**
     * @param int $listingId
     * @return \Traum\Entity\PriceLogic
     * @throws \Traum\Exception\InvalidRequest
     */
    public function get($listingId)
    {
        $uri = sprintf('/price-logic/%d', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\PriceLogic($body);
    }

    /**
     * @param int $listingId
     * @param \Traum\Entity\PriceLogic $priceLogic
     * @return \Traum\Entity\PriceLogic
     * @throws \Traum\Exception\InvalidRequest
     */
    public function post($listingId, Entity\PriceLogic $priceLogic)
    {
        $uri = sprintf('/price-logic/%d', $listingId);
        $body = $this->executePost($uri, $priceLogic, new Transformer\PriceLogic);

        return new Entity\PriceLogic($body);
    }

    /**
     * @param int $listingId
     * @param \Traum\Entity\PriceLogic $priceLogic
     * @return \Traum\Entity\PriceLogic
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patch($listingId, Entity\PriceLogic $priceLogic)
    {
        $uri = sprintf('/price-logic/%d', $listingId);
        $body = $this->executePatch($uri, $priceLogic, new Transformer\PriceLogic);

        return new Entity\PriceLogic($body);
    }
}

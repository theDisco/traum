<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class TravelTime
 * @package Traum\Resource
 * @author Oskar Golde <info@oskargolde.de>
 */
final class TravelTime extends Resource
{
    /**
     * @param int $listingId
     * @return \Traum\Entity\TravelTime
     * @throws \Traum\Exception\InvalidRequest
     */
    public function get($listingId)
    {
        $uri = sprintf('/travel-time/%d', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\TravelTime($body);
    }

    /**
     * @param int                      $listingId
     * @param \Traum\Entity\TravelTime $travelTime
     * @return \Traum\Entity\TravelTime
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patch($listingId, Entity\TravelTime $travelTime)
    {
        $uri = sprintf('/travel-time/%d', $listingId);
        $body = $this->executePatch($uri, $travelTime, new Transformer\TravelTime());

        return new Entity\TravelTime($body);
    }
}

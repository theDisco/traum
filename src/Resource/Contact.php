<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class Contact
 *
 * @package Traum\Resource
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Contact extends Resource
{
    /**
     * @param  int $listingId
     * @return \Traum\Entity\Contact
     * @throws \Traum\Exception\InvalidRequest
     */
    public function get($listingId)
    {
        $uri = sprintf('/contact/%d', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\Contact($body);
    }

    /**
     * @param  int                   $listingId
     * @param  \Traum\Entity\Contact $contact
     * @return \Traum\Entity\Contact
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patch($listingId, Entity\Contact $contact)
    {
        $uri = sprintf('/contact/%d', $listingId);
        $body = $this->executePatch($uri, $contact, new Transformer\Contact);

        return new Entity\Address($body);
    }

    /**
     * @param  int                   $listingId
     * @param  \Traum\Entity\Contact $contact
     * @return \Traum\Entity\Contact
     * @throws \Traum\Exception\InvalidRequest
     */
    public function put($listingId, Entity\Contact $contact)
    {
        $uri = sprintf('/contact/%d', $listingId);
        $body = $this->executePut($uri, $contact, new Transformer\Contact);

        return new Entity\Address($body);
    }
}

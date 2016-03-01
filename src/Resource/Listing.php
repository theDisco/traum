<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class Listing
 * @package Traum\Resource
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Listing extends Resource
{
    /**
     * @param int $listingId
     * @return \Traum\Entity\Listing
     * @throws \Traum\Exception\InvalidRequest
     */
    public function get($listingId)
    {
        $uri = sprintf('/listing/%d', $listingId);
        $response = $this->request('GET', $uri);
        $body = $response->getBody()->getContents();

        return new Entity\Listing(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param \Traum\Entity\Listing $listing
     * @return \Traum\Entity\Listing
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patch(Entity\Listing $listing)
    {
        $uri = sprintf('/listing/%d', $listing->getId());
        $data = $this->transformEntity($listing, new Transformer\Listing);
        $response = $this->request('PATCH', $uri, [], $data->toJson());
        $body = $response->getBody()->getContents();

        return new Entity\Listing(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingTextCollection
     * @throws \Traum\Exception\InvalidRequest
     */
    public function getTexts($listingId)
    {
        $uri = sprintf('/listing/%s/text', $listingId);
        $response = $this->request('GET', $uri);
        $body = $response->getBody()->getContents();

        return new Entity\ListingTextCollection(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param int $listingId
     * @param \Traum\Entity\ListingText $text
     * @return \Traum\Entity\ListingText
     * @throws \Traum\Exception\InvalidRequest
     */
    public function postText($listingId, Entity\ListingText $text)
    {
        $uri = sprintf('/listing/%d/text', $listingId);
        $data = $this->transformEntity($text, new Transformer\ListingText);
        $response = $this->request('POST', $uri, [], $data->toJson());
        $body = $response->getBody()->getContents();

        return new Entity\ListingText(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param int $listingId
     * @param \Traum\Entity\ListingText $text
     * @return \Traum\Entity\ListingText
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patchText($listingId, Entity\ListingText $text)
    {
        $uri = sprintf('/listing/%d/text/%d', $listingId, $text->getId());
        $data = $this->transformEntity($text, new Transformer\ListingText);
        $response = $this->request('PATCH', $uri, [], $data->toJson());
        $body = $response->getBody()->getContents();

        return new Entity\ListingText(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param int $listingId
     * @param \Traum\Entity\ListingText $text
     * @return bool
     * @throws \Traum\Exception\InvalidRequest
     */
    public function deleteText($listingId, Entity\ListingText $text)
    {
        $uri = sprintf('/listing/%d/text/%d', $listingId, $text->getId());
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }
}

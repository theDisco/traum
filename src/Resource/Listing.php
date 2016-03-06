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
        $body = $this->executeGet($uri);

        return new Entity\Listing($body);
    }

    /**
     * @param \Traum\Entity\Listing $listing
     * @return \Traum\Entity\Listing
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patch(Entity\Listing $listing)
    {
        $uri = sprintf('/listing/%d', $listing->getId());
        $body = $this->executePatch($uri, $listing, new Transformer\Listing);

        return new Entity\Listing($body);
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingTextCollection|\Traum\Entity\ListingText
     * @throws \Traum\Exception\InvalidRequest
     */
    public function getTexts($listingId)
    {
        $uri = sprintf('/listing/%s/text', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingTextCollection($body);
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
        $body = $this->executePost($uri, $text, new Transformer\ListingText);

        return new Entity\ListingText($body);
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
        $body = $this->executePatch($uri, $text, new Transformer\ListingText);

        return new Entity\ListingText($body);
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

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingPictureCollection|\Traum\Entity\ListingPicture
     */
    public function getListingPictures($listingId)
    {
        $uri = sprintf('/listing/%d/picture', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingPictureCollection($body);
    }

    /**
     * @param int $listingId
     * @param \Traum\Entity\ListingPicture $listingPicture
     * @return \Traum\Entity\ListingPicture
     */
    public function postListingPicture($listingId, Entity\ListingPicture $listingPicture)
    {
        $uri = sprintf('/listing/%d/picture', $listingId);
        $body = $this->executePost($uri, $listingPicture, new Transformer\ListingPicture);

        return new Entity\ListingPicture($body);
    }

    /**
     * @param int $listingId
     * @return bool
     * @throws \Traum\Exception\InvalidRequest
     */
    public function deleteListingPictures($listingId)
    {
        $uri = sprintf('/listing/%d/picture', $listingId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }
}

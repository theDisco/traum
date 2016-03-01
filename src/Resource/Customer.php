<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class Customer
 * @package Traum\Resource
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Customer extends Resource
{
    /**
     * @return \Traum\Entity\CustomerCollection|\Traum\Entity\Customer[]
     * @throws \Traum\Exception\InvalidRequest
     */
    public function collection()
    {
        $uri = '/customer';
        $response = $this->request('GET', $uri);
        $body = $response->getBody()->getContents();

        return new Entity\CustomerCollection(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param \Traum\Entity\Customer $customer
     * @return \Traum\Entity\Customer
     * @throws \Traum\Exception\InvalidRequest
     */
    public function post(Entity\Customer $customer)
    {
        $uri = '/customer';
        $data = $this->transformEntity($customer, new Transformer\Customer);
        $response = $this->request('POST', $uri, [], $data->toJson());
        $body = $response->getBody()->getContents();

        return new Entity\Customer(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param int $customerId
     * @return \Traum\Entity\CustomerListingCollection|\Traum\Entity\CustomerListing[]
     * @throws \Traum\Exception\InvalidRequest
     */
    public function getListings($customerId)
    {
        $uri = sprintf('/customer/%d/listing', $customerId);
        $response = $this->request('GET', $uri);
        $body = $response->getBody()->getContents();

        return new Entity\CustomerListingCollection(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param int $customerId
     * @param \Traum\Entity\CustomerListing $listing
     * @return \Traum\Entity\CustomerListing
     */
    public function postListing($customerId, Entity\CustomerListing $listing)
    {
        $uri = sprintf('/customer/%d/listing', $customerId);
        $data = $this->transformEntity($listing, new Transformer\CustomerListing);
        $response = $this->request('POST', $uri, [], $data->toJson());
        $body = $response->getBody()->getContents();

        return new Entity\CustomerListing(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param int $customerId
     * @param int $listingId
     * @return \Traum\Entity\CustomerListing
     * @throws \Traum\Exception\InvalidRequest
     */
    public function getListing($customerId, $listingId)
    {
        $uri = sprintf('/customer/%d/listing/%d', $customerId, $listingId);
        $response = $this->request('GET', $uri);
        $body = $response->getBody()->getContents();

        return new Entity\CustomerListing(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * @param int $customerId
     * @param \Traum\Entity\CustomerListing $listing
     * @return \Traum\Entity\CustomerListing
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patchListing($customerId, Entity\CustomerListing $listing)
    {
        // TODO validate id exists
        // TODO remove code duplication
        $uri = sprintf('/customer/%d/listing/%d', $customerId, $listing->getId());
        $data = $this->transformEntity($listing, new Transformer\CustomerListing);
        $response = $this->request('PATCH', $uri, [], $data->toJson());
        $body = $response->getBody()->getContents();

        return new Entity\CustomerListing(json_decode($body, JSON_OBJECT_AS_ARRAY));
    }
}

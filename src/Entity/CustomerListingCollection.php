<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class CustomerListingCollection
 *
 * @package Traum\Entity
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class CustomerListingCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'listing';
    }

    /**
     * @param  array $data
     * @return \Traum\Entity\CustomerListing
     */
    protected function createEntity(array $data)
    {
        return new Entity\CustomerListing($data);
    }
}

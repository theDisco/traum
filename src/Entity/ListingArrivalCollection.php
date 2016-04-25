<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingArrivalCollection
 * @package Traum\Entity
 * @author Oskar Golde <info@oskargolde.de>
 */
class ListingArrivalCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'arrival';
    }

    /**
     * @param array $data
     * @return \Traum\Entity\ListingArrival
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingArrival($data);
    }
}

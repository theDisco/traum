<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingAdditionalChargeCollection
 * @package Traum\Entity
 * @author Oskar Golde <info@oskargolde.de>
 */
class ListingAdditionalChargeCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'additional_charge';
    }

    /**
     * @param array $data
     * @return \Traum\Entity\ListingAdditionalCharge
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingAdditionalCharge($data);
    }
}

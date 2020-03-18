<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingPriceTableCollection
 *
 * @package Traum\Entity
 * @author  Oskar Golde <info@oskargolde.de>
 */
class ListingPriceTableCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'price_table';
    }

    /**
     * @param  array $data
     * @return \Traum\Entity\ListingPriceTable
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingPriceTable($data);
    }
}

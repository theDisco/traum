<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingWeekPriceTableCollection
 * @package Traum\Entity
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class ListingWeekPriceTableCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'week_price_table';
    }

    /**
     * @param array $data
     * @return \Traum\Entity\ListingWeekPriceTable
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingWeekPriceTable($data);
    }
}

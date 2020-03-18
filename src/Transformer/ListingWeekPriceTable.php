<?php

namespace Traum\Transformer;

use Traum\Entity;
use Traum\Transformer;

/**
 * Class ListingWeekPriceTable
 *
 * @package Traum\Transformer
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingWeekPriceTable extends Transformer
{
    /**
     * @param \Traum\Entity\ListingWeekPriceTable $listingWeekPriceTable
     *
     * @return array
     */
    public function transform(Entity\ListingWeekPriceTable $listingWeekPriceTable)
    {
        $this->addField(
            Entity\ListingWeekPriceTable::SEASON_ID,
            $listingWeekPriceTable->getSeasonId(),
            'int'
        );
        $this->addField(
            Entity\ListingWeekPriceTable::FROM,
            $listingWeekPriceTable->getFrom(),
            'string'
        );
        $this->addField(
            Entity\ListingWeekPriceTable::TO,
            $listingWeekPriceTable->getTo(),
            'string'
        );
        $this->addField(
            Entity\ListingWeekPriceTable::PRICE_PER_WEEK,
            $listingWeekPriceTable->getPricePerWeek(),
            'double'
        );
        $this->addField(
            Entity\ListingWeekPriceTable::PRICE_PER_FOLLOWING_WEEK,
            $listingWeekPriceTable->getPricePerFollowingWeek(),
            'double'
        );
        $this->addField(
            Entity\ListingWeekPriceTable::MINIMUM_STAY_ID,
            $listingWeekPriceTable->getMinimumStayId(),
            'int'
        );

        return $this->getFields();
    }
}

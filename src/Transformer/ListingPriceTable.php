<?php

namespace Traum\Transformer;

use Traum\Entity;
use Traum\Transformer;

/**
 * Class ListingPriceTable
 *
 * @package Traum\Transformer
 * @author  Oskar Golde <info@oskargolde.de>
 */
final class ListingPriceTable extends Transformer
{
    /**
     * @param  \Traum\Entity\ListingPriceTable $listingPriceTable
     * @return array
     */
    public function transform(Entity\ListingPriceTable $listingPriceTable)
    {
        $this->addField(
            Entity\ListingPriceTable::SEASON_ID,
            $listingPriceTable->getSeasonId(),
            'int'
        );
        $this->addField(
            Entity\ListingPriceTable::FROM,
            $listingPriceTable->getFrom(),
            'string'
        );
        $this->addField(
            Entity\ListingPriceTable::TO,
            $listingPriceTable->getTo(),
            'string'
        );
        $this->addField(
            Entity\ListingPriceTable::PRICE_PER_DAY,
            $listingPriceTable->getPricePerDay(),
            'double'
        );
        $this->addField(
            Entity\ListingPriceTable::PRICE_PER_WEEK,
            $listingPriceTable->getPricePerWeek(),
            'double'
        );
        $this->addField(
            Entity\ListingPriceTable::PRICE_PER_EXTRA_NIGHT,
            $listingPriceTable->getPricePerExtraNight(),
            'double'
        );
        $this->addField(
            Entity\ListingPriceTable::MINIMUM_STAY_ID,
            $listingPriceTable->getMinimumStayId(),
            'int'
        );

        return $this->getFields();
    }
}

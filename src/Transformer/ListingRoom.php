<?php

namespace Traum\Transformer;

use Traum\Entity;
use Traum\Transformer;

/**
 * Class ListingRoom
 *
 * @package Traum\Transformer
 * @author  Oskar Golde <info@oskargolde.de>
 */
final class ListingRoom extends Transformer
{
    /**
     * @param  \Traum\Entity\ListingRoom $listingRoom
     * @return array
     */
    public function transform(Entity\ListingRoom $listingRoom)
    {
        $this->addField(
            Entity\ListingRoom::ROOM_TYPE_ID,
            $listingRoom->getRoomTypeId(),
            'int'
        );

        $this->addField(
            Entity\ListingRoom::LISTING_FLOOR_ID,
            $listingRoom->getListingFloorId(),
            'int'
        );

        $this->addField(
            Entity\ListingRoom::AREA,
            $listingRoom->getArea(),
            'int'
        );

        $this->addField(
            Entity\ListingRoom::ROOM_QUANTITY,
            $listingRoom->getRoomQuantity(),
            'int'
        );

        return $this->getFields();
    }
}

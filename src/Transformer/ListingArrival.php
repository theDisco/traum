<?php

namespace Traum\Transformer;

use Traum\Entity;
use Traum\Transformer;

/**
 * Class ListingArrival
 * @package Traum\Transformer
 * @author Oskar Golde <info@oskargolde.de>
 */
final class ListingArrival extends Transformer
{
    /**
     * @param \Traum\Entity\ListingArrival $listingArrival
     * @return array
     */
    public function transform(Entity\ListingArrival $listingArrival)
    {
        $this->addField(
            Entity\ListingArrival::DAY_ID,
            $listingArrival->getDayId(),
            'int'
        );

        return $this->getFields();
    }
}

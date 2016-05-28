<?php

namespace Traum\Transformer;

use Traum\Entity;
use Traum\Transformer;

/**
 * Class ListingAdditionalCharge
 * @package Traum\Transformer
 * @author Oskar Golde <info@oskargolde.de>
 */
final class ListingAdditionalCharge extends Transformer
{
    /**
     * @param \Traum\Entity\ListingAdditionalCharge $listingAdditionalCharge
     * @return array
     */
    public function transform(Entity\ListingAdditionalCharge $listingAdditionalCharge)
    {
        $this->addField(
            Entity\ListingAdditionalCharge::ADDITIONAL_CHARGE_ID,
            $listingAdditionalCharge->getAdditionalChargeId(),
            'int'
        );

        $this->addField(
            Entity\ListingAdditionalCharge::ADDITIONAL_CHARGE_UNIT_ID,
            $listingAdditionalCharge->getAdditionalChargeUnitId(),
            'int'
        );

        $this->addField(
            Entity\ListingAdditionalCharge::OPTIONAL,
            $listingAdditionalCharge->getOptional(),
            'bool'
        );

        $this->addField(
            Entity\ListingAdditionalCharge::PRICE,
            $listingAdditionalCharge->getPrice(),
            'double'
        );

        return $this->getFields();
    }
}

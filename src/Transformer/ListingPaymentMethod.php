<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class ListingPaymentMethod
 *
 * @package Traum\Transformer
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingPaymentMethod extends Transformer
{
    /**
     * @param \Traum\Entity\ListingPaymentMethod $listingPaymentMethod
     *
     * @return array
     */
    public function transform(Entity\ListingPaymentMethod $listingPaymentMethod)
    {
        $this->addField(
            Entity\ListingPaymentMethod::PAYMENT_METHOD_ID,
            $listingPaymentMethod->getPaymentMethodId(),
            'int'
        );

        return $this->getFields();
    }
}

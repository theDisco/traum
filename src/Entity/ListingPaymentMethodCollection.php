<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingPaymentMethodCollection
 * @package Traum\Entity
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingPaymentMethodCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'payment_method';
    }

    /**
     * @param array $data
     * @return \Traum\Entity\ListingPaymentMethod
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingPaymentMethod($data);
    }
}

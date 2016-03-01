<?php

namespace Traum\Transformer;

use League\Fractal;
use Traum\Entity;

/**
 * Class Customer
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Customer extends Fractal\TransformerAbstract
{
    /**
     * @param \Traum\Entity\Customer $customer
     * @return array
     */
    public function transform(Entity\Customer $customer)
    {
        return [
            Entity\Customer::CUSTOMER_ID => (int) $customer->getCustomerId(),
        ];
    }
}

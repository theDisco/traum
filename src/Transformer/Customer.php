<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class Customer
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Customer extends Transformer
{
    /**
     * @param \Traum\Entity\Customer $customer
     * @return array
     */
    public function transform(Entity\Customer $customer)
    {
        $this->addField(Entity\Customer::CUSTOMER_ID, $customer->getCustomerId(), 'int');

        return $this->getFields();
    }
}

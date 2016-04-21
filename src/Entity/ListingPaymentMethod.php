<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingPaymentMethod
 * @package Traum\Entity
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingPaymentMethod extends Entity
{
    const ID = 'id';
    const PAYMENT_METHOD_ID = 'payment_method_id';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->setData(self::ID, $id);
    }

    /**
     * @return int
     */
    public function getPaymentMethodId()
    {
        return $this->getData(self::PAYMENT_METHOD_ID);
    }

    /**
     * @param int $paymentMethodId
     * @return void
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->setData(self::PAYMENT_METHOD_ID, $paymentMethodId);
    }
}

<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class PaymentOption
 *
 * @package Traum\Entity
 * @author  Oskar Golde <info@oskargolde.de>
 */
final class PaymentOption extends Entity
{
    const ID = 'id';
    const PAYMENT_METHOD_ID = 'payment_method_id';
    const DEPOSIT = 'deposit';
    const PREPAYMENT_TYPE_ID = 'prepayment_type_id';
    const PREPAYMENT = 'prepayment';
    const FINAL_PAYMENT_ID = 'final_payment_id';
    const DEPOSIT_ID = 'deposit_id';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param  int $id
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
     * @param  int $value
     * @return void
     */
    public function setPaymentMethodId($value)
    {
        $this->setData(self::PAYMENT_METHOD_ID, $value);
    }

    /**
     * @return int
     */
    public function getDeposit()
    {
        return $this->getData(self::DEPOSIT);
    }

    /**
     * @param  int $value
     * @return void
     */
    public function setDeposit($value)
    {
        $this->setData(self::DEPOSIT, $value);
    }

    /**
     * @return int
     */
    public function getPrepaymentTypeId()
    {
        return $this->getData(self::PREPAYMENT_TYPE_ID);
    }

    /**
     * @param  int $value
     * @return void
     */
    public function setPrepaymentTypeId($value)
    {
        $this->setData(self::PREPAYMENT_TYPE_ID, $value);
    }

    /**
     * @return int
     */
    public function getPrepayment()
    {
        return $this->getData(self::PREPAYMENT);
    }

    /**
     * @param  int $value
     * @return void
     */
    public function setPrepayment($value)
    {
        $this->setData(self::PREPAYMENT, $value);
    }

    /**
     * @return int
     */
    public function getFinalPaymentId()
    {
        return $this->getData(self::FINAL_PAYMENT_ID);
    }

    /**
     * @param  int $value
     * @return void
     */
    public function setFinalPaymentId($value)
    {
        $this->setData(self::FINAL_PAYMENT_ID, $value);
    }

    /**
     * @return int
     */
    public function getDepositId()
    {
        return $this->getData(self::DEPOSIT_ID);
    }

    /**
     * @param  int $value
     * @return void
     */
    public function setDepositId($value)
    {
        $this->setData(self::DEPOSIT_ID, $value);
    }
}

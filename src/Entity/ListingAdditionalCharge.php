<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingAdditionalCharge
 * @package Traum\Entity
 * @author Oskar Golde <info@oskargolde.de>
 */
class ListingAdditionalCharge extends Entity
{
    const ID = 'id';
    const ADDITIONAL_CHARGE_ID = 'additional_charge_id';
    const ADDITIONAL_CHARGE_UNIT_ID = 'additional_charge_unit_id';
    const OPTIONAL = 'optional';
    const PRICE = 'price';

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
    public function getAdditionalChargeId()
    {
        return $this->getData(self::ADDITIONAL_CHARGE_ID);
    }

    /**
     * @param int $id
     * @return void
     */
    public function setAdditionalChargeId($id)
    {
        $this->setData(self::ADDITIONAL_CHARGE_ID, $id);
    }

    /**
     * @return int
     */
    public function getAdditionalChargeUnitId()
    {
        return $this->getData(self::ADDITIONAL_CHARGE_UNIT_ID);
    }

    /**
     * @param int $id
     * @return void
     */
    public function setAdditionalChargeUnitId($id)
    {
        $this->setData(self::ADDITIONAL_CHARGE_UNIT_ID, $id);
    }

    /**
     * @return boolean
     */
    public function getOptional()
    {
        return $this->getData(self::OPTIONAL);
    }

    /**
     * @param boolean $value
     * @return void
     */
    public function setOptional($value)
    {
        $this->setData(self::OPTIONAL, $value);
    }

    /**
     * @return integer|float
     */
    public function getPrice()
    {
        return $this->getData(self::PRICE);
    }

    /**
     * @param integer $value
     * @return void
     */
    public function setPrice($value)
    {
        $this->setData(self::PRICE, $value);
    }
}

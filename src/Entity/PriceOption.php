<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class Register
 *
 * @package Traum\Entity
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class PriceOption extends Entity
{
    const ID = 'id';
    const PRICE_SCOPE_ID = 'price_scope_id';
    const PERSON_SELECTOR_ID = 'person_selector_id';
    const EXTRA_CHARGE_PERSON_NIGHT = 'extra_charge_person_night';
    const EXTRA_CHARGE_PERSON_WEEK = 'extra_charge_person_week';
    const CURRENCY_CODE = 'currency_code';

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
    public function getPriceScopeId()
    {
        return $this->getData(self::PRICE_SCOPE_ID);
    }

    /**
     * @param  int $priceScopeId
     * @return void
     */
    public function setPriceScopeId($priceScopeId)
    {
        $this->setData(self::PRICE_SCOPE_ID, $priceScopeId);
    }

    /**
     * @return int
     */
    public function getPersonSelectorId()
    {
        return $this->getData(self::PERSON_SELECTOR_ID);
    }

    /**
     * @param  int $personSelectorId
     * @return void
     */
    public function setPersonSelectorId($personSelectorId)
    {
        $this->setData(self::PERSON_SELECTOR_ID, $personSelectorId);
    }

    /**
     * @return int
     */
    public function getExtraChargePersonNight()
    {
        return $this->getData(self::EXTRA_CHARGE_PERSON_NIGHT);
    }

    /**
     * @param  int $extraChargePersonNight
     * @return void
     */
    public function setExtraChargePersonNight($extraChargePersonNight)
    {
        $this->setData(self::EXTRA_CHARGE_PERSON_NIGHT, $extraChargePersonNight);
    }

    /**
     * @return int
     */
    public function getExtraChargePersonWeek()
    {
        return $this->getData(self::EXTRA_CHARGE_PERSON_WEEK);
    }

    /**
     * @param  int $extraChargePersonWeek
     * @return void
     */
    public function setExtraChargePersonWeek($extraChargePersonWeek)
    {
        $this->setData(self::EXTRA_CHARGE_PERSON_WEEK, $extraChargePersonWeek);
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->getData(self::CURRENCY_CODE);
    }

    /**
     * @param  string $currencyCode
     * @return void
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->setData(self::CURRENCY_CODE, $currencyCode);
    }
}

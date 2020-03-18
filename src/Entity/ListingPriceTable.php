<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingPriceTable
 *
 * @package Traum\Entity
 * @author  Oskar Golde <info@oskargolde.de>
 */
class ListingPriceTable extends Entity
{
    const ID = 'id';
    const SEASON_ID = 'season_id';
    const FROM = 'from';
    const TO = 'to';
    const PRICE_PER_DAY = 'price_per_day';
    const PRICE_PER_WEEK = 'price_per_week';
    const PRICE_PER_EXTRA_NIGHT = 'price_extra_night';
    const MINIMUM_STAY_ID = 'minimum_stay_id';

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
    public function getSeasonId()
    {
        return $this->getData(self::SEASON_ID);
    }

    /**
     * @param  int $seasonId
     * @return void
     */
    public function setSeasonId($seasonId)
    {
        $this->setData(self::SEASON_ID, $seasonId);
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->getData(self::FROM);
    }

    /**
     * @param  string $from
     * @return void
     */
    public function setFrom($from)
    {
        $this->setData(self::FROM, $from);
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->getData(self::TO);
    }

    /**
     * @param  string $to
     * @return void
     */
    public function setTo($to)
    {
        $this->setData(self::TO, $to);
    }

    /**
     * @return double
     */
    public function getPricePerDay()
    {
        return $this->getData(self::PRICE_PER_DAY);
    }

    /**
     * @param  double $pricePerDay
     * @return void
     */
    public function setPricePerDay($pricePerDay)
    {
        $this->setData(self::PRICE_PER_DAY, $pricePerDay);
    }

    /**
     * @return double
     */
    public function getPricePerWeek()
    {
        return $this->getData(self::PRICE_PER_WEEK);
    }

    /**
     * @param  double $pricePerWeek
     * @return void
     */
    public function setPricePerWeek($pricePerWeek)
    {
        $this->setData(self::PRICE_PER_WEEK, $pricePerWeek);
    }

    /**
     * @return double
     */
    public function getPricePerExtraNight()
    {
        return $this->getData(self::PRICE_PER_EXTRA_NIGHT);
    }

    /**
     * @param  double $pricePerExtraNight
     * @return void
     */
    public function setPricePerExtraNight($pricePerExtraNight)
    {
        $this->setData(self::PRICE_PER_EXTRA_NIGHT, $pricePerExtraNight);
    }

    /**
     * @return int
     */
    public function getMinimumStayId()
    {
        return $this->getData(self::MINIMUM_STAY_ID);
    }

    /**
     * @param  int|double $minimumStayId
     * @return void
     */
    public function setMinimumStayId($minimumStayId)
    {
        $this->setData(self::MINIMUM_STAY_ID, $minimumStayId);
    }
}

<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingWeekPriceTable
 * @package Traum\Entity
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class ListingWeekPriceTable extends Entity
{
    const ID = 'id';
    const SEASON_ID = 'season_id';
    const FROM = 'from';
    const TO = 'to';
    const PRICE_PER_WEEK = 'price_per_week';
    const PRICE_PER_FOLLOWING_WEEK = 'price_per_following_week';
    const MINIMUM_STAY_ID = 'minimum_stay_id';

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
    public function getSeasonId()
    {
        return $this->getData(self::SEASON_ID);
    }

    /**
     * @param int $seasonId
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
     * @param string $from
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
     * @param string $to
     * @return void
     */
    public function setTo($to)
    {
        $this->setData(self::TO, $to);
    }

    /**
     * @return double
     */
    public function getPricePerWeek()
    {
        return $this->getData(self::PRICE_PER_WEEK);
    }

    /**
     * @param double $pricePerWeek
     * @return void
     */
    public function setPricePerWeek($pricePerWeek)
    {
        $this->setData(self::PRICE_PER_WEEK, $pricePerWeek);
    }

    /**
     * @return double
     */
    public function getPricePerFollowingWeek()
    {
        return $this->getData(self::PRICE_PER_FOLLOWING_WEEK);
    }

    /**
     * @param double $pricePerFollowingWeek
     * @return void
     */
    public function setPricePerFollowingWeek($pricePerFollowingWeek)
    {
        $this->setData(self::PRICE_PER_FOLLOWING_WEEK, $pricePerFollowingWeek);
    }

    /**
     * @return int
     */
    public function getMinimumStayId()
    {
        return $this->getData(self::MINIMUM_STAY_ID);
    }

    /**
     * @param int|double $minimumStayId
     * @return void
     */
    public function setMinimumStayId($minimumStayId)
    {
        $this->setData(self::MINIMUM_STAY_ID, $minimumStayId);
    }
}

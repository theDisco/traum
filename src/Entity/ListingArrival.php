<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingArrival
 * @package Traum\Entity
 * @author Oskar Golde <info@oskargolde.de>
 */
class ListingArrival extends Entity
{
    const ID = 'id';
    const DAY_ID = 'day_id';

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
    public function getDayId()
    {
        return $this->getData(self::DAY_ID);
    }

    /**
     * @param int $dayId
     * @return void
     */
    public function setDayId($dayId)
    {
        $this->setData(self::DAY_ID, $dayId);
    }
}

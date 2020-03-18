<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class TravelTime
 *
 * @package Traum\Entity
 * @author  Oskar Golde <info@oskargolde.de>
 */
final class TravelTime extends Entity
{
    const ID = 'id';
    const HOUR_ID_ARRIVAL = 'hour_id_arrival';
    const HOUR_ID_DEPARTURE = 'hour_id_departure';

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
    public function getHourIdArrival()
    {
        return $this->getData(self::HOUR_ID_ARRIVAL);
    }

    /**
     * @param  int $hourIdArrival
     * @return void
     */
    public function setHourIdArrival($hourIdArrival)
    {
        $this->setData(self::HOUR_ID_ARRIVAL, $hourIdArrival);
    }

    /**
     * @return int
     */
    public function getHourIdDeparture()
    {
        return $this->getData(self::HOUR_ID_DEPARTURE);
    }

    /**
     * @param  int $hourIdDeparture
     * @return void
     */
    public function setHourIdDeparture($hourIdDeparture)
    {
        $this->setData(self::HOUR_ID_DEPARTURE, $hourIdDeparture);
    }
}

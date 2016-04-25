<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class Customer
 * @package Traum\Transformer
 * @author Oskar Golde <info@oskargolde.de>
 */
final class TravelTime extends Transformer
{
    /**
     * @param \Traum\Entity\TravelTime $travelTime
     * @return array
     */
    public function transform(Entity\TravelTime $travelTime)
    {
        $this->addField(Entity\TravelTime::HOUR_ID_ARRIVAL, $travelTime->getHourIdArrival(), 'int');
        $this->addField(Entity\TravelTime::HOUR_ID_DEPARTURE, $travelTime->getHourIdDeparture(), 'int');

        return $this->getFields();
    }
}

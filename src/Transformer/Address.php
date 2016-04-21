<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class Customer
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Address extends Transformer
{
    /**
     * @param \Traum\Entity\Address $address
     * @return array
     */
    public function transform(Entity\Address $address)
    {
        $this->addField(Entity\Address::STREET, $address->getStreet(), 'string');
        $this->addField(Entity\Address::ZIP, $address->getZip(), 'string');
        $this->addField(Entity\Address::CITY, $address->getCity(), 'string');
        $this->addField(Entity\Address::LONGITUDE, $address->getLongitude(), 'double');
        $this->addField(Entity\Address::LATITUDE, $address->getLatitude(), 'double');
        $this->addField(Entity\Address::HIDE_EXACT_POSITION, $address->hideExactPosition(), 'bool');

        return $this->getFields();
    }
}

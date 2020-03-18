<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class Address
 *
 * @package Traum\Entity
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Address extends Entity
{
    const ID = 'id';
    const STREET = 'street';
    const ZIP = 'zip';
    const CITY = 'city';
    const LONGITUDE = 'longitude';
    const LATITUDE = 'latitude';
    const HIDE_EXACT_POSITION = 'hide_exact_position';

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
     * @return string
     */
    public function getStreet()
    {
        return $this->getData(self::STREET);
    }

    /**
     * @param  string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->setData(self::STREET, $street);
    }
    /**
     * @return string
     */
    public function getZip()
    {
        return $this->getData(self::ZIP);
    }

    /**
     * @param  string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->setData(self::ZIP, $zip);
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->getData(self::CITY);
    }

    /**
     * @param  string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->setData(self::CITY, $city);
    }

    /**
     * @return double
     */
    public function getLongitude()
    {
        return $this->getData(self::LONGITUDE);
    }

    /**
     * @param  double $longitude
     * @return void
     */
    public function setLongitude($longitude)
    {
        $this->setData(self::LONGITUDE, $longitude);
    }

    /**
     * @return double
     */
    public function getLatitude()
    {
        return $this->getData(self::LATITUDE);
    }

    /**
     * @param  double $latitude
     * @return void
     */
    public function setLatitude($latitude)
    {
        $this->setData(self::LATITUDE, $latitude);
    }

    /**
     * @return bool
     */
    public function hideExactPosition()
    {
        return $this->getData(self::HIDE_EXACT_POSITION);
    }

    /**
     * @param  bool $hideExactPosition
     * @return void
     */
    public function setHideExactPosition($hideExactPosition)
    {
        $this->setData(self::HIDE_EXACT_POSITION, $hideExactPosition);
    }
}

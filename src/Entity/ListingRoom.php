<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingRoom
 * @package Traum\Entity
 * @author Oskar Golde <info@oskargolde.de>
 */
class ListingRoom extends Entity
{
    const ID = 'id';
    const ROOM_TYPE_ID = 'room_type_id';
    const LISTING_FLOOR_ID = 'listing_floor_id';
    const AREA = 'area';
    const ROOM_QUANTITY = 'room_quantity';

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
    public function getRoomTypeId()
    {
        return $this->getData(self::ROOM_TYPE_ID);
    }

    /**
     * @param int $id
     * @return void
     */
    public function setRoomTypeId($id)
    {
        $this->setData(self::ROOM_TYPE_ID, $id);
    }

    /**
     * @return int
     */
    public function getListingFloorId()
    {
        return $this->getData(self::LISTING_FLOOR_ID);
    }

    /**
     * @param int $id
     * @return void
     */
    public function setListingFloorId($id)
    {
        $this->setData(self::LISTING_FLOOR_ID, $id);
    }

    /**
     * @return int
     */
    public function getArea()
    {
        return $this->getData(self::AREA);
    }

    /**
     * @param int $value
     * @return void
     */
    public function setArea($value)
    {
        $this->setData(self::AREA, $value);
    }

    /**
     * @return int
     */
    public function getRoomQuantity()
    {
        return $this->getData(self::ROOM_QUANTITY);
    }

    /**
     * @param int $value
     * @return void
     */
    public function setRoomQuantity($value)
    {
        $this->setData(self::ROOM_QUANTITY, $value);
    }
}

<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingRoomCollection
 *
 * @package Traum\Entity
 * @author  Oskar Golde <info@oskargolde.de>
 */
class ListingRoomCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'room';
    }

    /**
     * @param  array $data
     * @return \Traum\Entity\ListingRoom
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingRoom($data);
    }
}

<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingLeisureActivityCollection
 *
 * @package Traum\Entity
 * @author  Oskar Golde <info@oskargolde.de>
 */
class ListingLeisureActivityCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'leisure_activity';
    }

    /**
     * @param  array $data
     * @return \Traum\Entity\ListingLeisureActivity
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingLeisureActivity($data);
    }
}

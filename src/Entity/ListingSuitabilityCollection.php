<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingSuitabilityCollection
 *
 * @package Traum\Entity
 * @author  Oskar Golde <info@oskargolde.de>
 */
class ListingSuitabilityCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'suitability';
    }

    /**
     * @param  array $data
     * @return \Traum\Entity\ListingSuitability
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingSuitability($data);
    }
}

<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingTextCollection
 *
 * @package Traum\Entity
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingTextCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'text';
    }

    /**
     * @param  array $data
     * @return \Traum\Entity\ListingText
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingText($data);
    }
}

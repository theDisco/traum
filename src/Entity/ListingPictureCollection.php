<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingPictureCollection
 *
 * @package Traum\Entity
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingPictureCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'picture';
    }

    /**
     * @param  array $data
     * @return \Traum\Entity\ListingPicture
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingPicture($data);
    }
}

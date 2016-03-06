<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingPictureTitleCollection
 * @package Traum\Entity
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingPictureTitleCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'picture_title';
    }

    /**
     * @param array $data
     * @return \Traum\Entity\ListingPictureTitle
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingPictureTitle($data);
    }
}

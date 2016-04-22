<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class ListingLanguageCollection
 * @package Traum\Entity
 * @author Oskar Golde <info@oskargolde.de>
 */
class ListingLanguageCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'language';
    }

    /**
     * @param array $data
     * @return \Traum\Entity\ListingLanguage
     */
    protected function createEntity(array $data)
    {
        return new Entity\ListingLanguage($data);
    }
}

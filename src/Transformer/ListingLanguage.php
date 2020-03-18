<?php

namespace Traum\Transformer;

use Traum\Entity;
use Traum\Transformer;

/**
 * Class ListingLanguage
 *
 * @package Traum\Transformer
 * @author  Oskar Golde <info@oskargolde.de>
 */
final class ListingLanguage extends Transformer
{
    /**
     * @param \Traum\Entity\ListingLanguage $listingLanguage
     *
     * @return array
     */
    public function transform(Entity\ListingLanguage $listingLanguage)
    {
        $this->addField(
            Entity\ListingLanguage::LANGUAGE,
            $listingLanguage->getLanguage(),
            'string'
        );

        return $this->getFields();
    }
}

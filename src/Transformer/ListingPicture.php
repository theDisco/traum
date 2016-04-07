<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class ListingPicture
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class ListingPicture extends Transformer
{
    /**
     * @param \Traum\Entity\ListingPicture $listingPicture
     * @return array
     */
    public function transform(Entity\ListingPicture $listingPicture)
    {
        $this->addField(Entity\ListingPicture::URL , $listingPicture->getUrl(), 'string');
        $this->addField(Entity\ListingPicture::CATEGORY_ID , $listingPicture->getCategoryId(), 'int');
        $this->addField(Entity\ListingPicture::IS_SUMMER_PICTURE , $listingPicture->isSummerPicture(), 'bool');
        $this->addField(Entity\ListingPicture::IS_WINTER_PICTURE , $listingPicture->isWinterPicture(), 'bool');

        return $this->getFields();        
    }
}

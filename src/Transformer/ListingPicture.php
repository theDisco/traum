<?php

namespace Traum\Transformer;

use League\Fractal;
use Traum\Entity;

/**
 * Class ListingPicture
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class ListingPicture extends Fractal\TransformerAbstract
{
    /**
     * @param \Traum\Entity\ListingPicture $listingPicture
     * @return array
     */
    public function transform(Entity\ListingPicture $listingPicture)
    {
        return [
            Entity\ListingPicture::URL => $listingPicture->getUrl(),
            Entity\ListingPicture::CATEGORY_ID => (int) $listingPicture->getCategoryId(),
            Entity\ListingPicture::IS_SUMMER_PICTURE => (bool) $listingPicture->isSummerPicture(),
            Entity\ListingPicture::IS_WINTER_PICTURE => (bool) $listingPicture->isWinterPicture(),
        ];
    }
}

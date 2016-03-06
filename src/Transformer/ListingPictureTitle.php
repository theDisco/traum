<?php

namespace Traum\Transformer;

use League\Fractal;
use Traum\Entity;

/**
 * Class ListingPictureTitle
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class ListingPictureTitle extends Fractal\TransformerAbstract
{
    /**
     * @param \Traum\Entity\ListingPictureTitle $pictureTitle
     * @return array
     */
    public function transform(Entity\ListingPictureTitle $pictureTitle)
    {
        return [
            Entity\ListingPictureTitle::TEXT => $pictureTitle->getText(),
        ];
    }
}

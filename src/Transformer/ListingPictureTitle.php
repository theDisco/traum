<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class ListingPictureTitle
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class ListingPictureTitle extends Transformer
{
    /**
     * @param \Traum\Entity\ListingPictureTitle $pictureTitle
     * @return array
     */
    public function transform(Entity\ListingPictureTitle $pictureTitle)
    {
        $this->addField(Entity\ListingPictureTitle::TEXT, $pictureTitle->getText(), 'string');

        return $this->getFields();
    }
}

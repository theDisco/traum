<?php

namespace Traum\Transformer;

use Traum\Entity;
use Traum\Transformer;

/**
 * Class ListingLeisureActivity
 * @package Traum\Transformer
 * @author Oskar Golde <info@oskargolde.de>
 */
final class ListingLeisureActivity extends Transformer
{
    /**
     * @param \Traum\Entity\ListingLeisureActivity $listingLeisureActivity
     * @return array
     */
    public function transform(Entity\ListingLeisureActivity $listingLeisureActivity)
    {
        $this->addField(
            Entity\ListingLeisureActivity::LEISURE_ACTIVITY_ID,
            $listingLeisureActivity->getLeisureActivityId(),
            'int'
        );

        return $this->getFields();
    }
}

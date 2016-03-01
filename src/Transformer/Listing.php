<?php

namespace Traum\Transformer;

use League\Fractal;
use Traum\Entity;

/**
 * Class Listing
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class Listing extends Fractal\TransformerAbstract
{
    /**
     * @param \Traum\Entity\Listing $listing
     * @return array
     */
    public function transform(Entity\Listing $listing)
    {
        return [
            Entity\Listing::ACCESSIBILITY_ID => (int) $listing->getAccessibilityId(),
            Entity\Listing::CLASSIFICATION_STAR_ID => (int) $listing->getClassificationStarId(),
            // TODO should be \DateTime
            Entity\Listing::CLASSIFICATION_EXPIRE_DATE => $listing->getClassificationExpireDate(),
            Entity\Listing::MAX_PERSONS => (int) $listing->getMaxPersons(),
            Entity\Listing::SIZE => (int) $listing->getSize(),
            Entity\Listing::OBJECT_TYPE_ID => (int) $listing->getObjectTypeId(),
        ];
    }
}

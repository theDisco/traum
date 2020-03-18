<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class Listing
 *
 * @package Traum\Transformer
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class Listing extends Transformer
{
    /**
     * @param \Traum\Entity\Listing $listing
     *
     * @return array
     */
    public function transform(Entity\Listing $listing)
    {
        $this->addField(Entity\Listing::ACCESSIBILITY_ID, $listing->getAccessibilityId(), 'int');
        $this->addField(Entity\Listing::CLASSIFICATION_STAR_ID, $listing->getClassificationStarId(), 'int');
        // TODO should be \DateTime
        $this->addField(Entity\Listing::CLASSIFICATION_EXPIRE_DATE, $listing->getClassificationExpireDate(), 'string');
        $this->addField(Entity\Listing::MAX_PERSONS, $listing->getMaxPersons(), 'int');
        $this->addField(Entity\Listing::SIZE, $listing->getSize(), 'int');
        $this->addField(Entity\Listing::OBJECT_TYPE_ID, $listing->getObjectTypeId(), 'int');

        return $this->getFields();
    }
}

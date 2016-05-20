<?php

namespace Traum\Transformer;

use Traum\Entity;
use Traum\Transformer;

/**
 * Class ListingSuitabilityForPatch
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingSuitabilityForPatch extends Transformer
{
    /**
     * @param \Traum\Entity\ListingSuitability $listingSuitability
     * @return array
     */
    public function transform(Entity\ListingSuitability $listingSuitability)
    {
        $this->addField(
            Entity\ListingSuitability::ID,
            $listingSuitability->getId(),
            'int'
        );

        $this->addField(
            Entity\ListingSuitability::SUITABILITY_ID,
            $listingSuitability->getSuitabilityId(),
            'int'
        );

        $this->addField(
            Entity\ListingSuitability::SUITABILITY_STATUS_ID,
            $listingSuitability->getSuitabilityStatusId(),
            'int'
        );

        return $this->getFields();
    }
}

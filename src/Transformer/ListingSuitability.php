<?php

namespace Traum\Transformer;

use Traum\Entity;
use Traum\Transformer;

/**
 * Class ListingSuitability
 *
 * @package Traum\Transformer
 * @author  Oskar Golde <info@oskargolde.de>
 */
final class ListingSuitability extends Transformer
{
    /**
     * @param \Traum\Entity\ListingSuitability $listingSuitability
     *
     * @return array
     */
    public function transform(Entity\ListingSuitability $listingSuitability)
    {
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

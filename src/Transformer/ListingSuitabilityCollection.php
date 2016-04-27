<?php

namespace Traum\Transformer;

use Traum\Entity;
use Traum\Transformer;

/**
 * Class ListingSuitability
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingSuitabilityCollection extends Transformer
{
    /**
     * @param \Traum\Entity\ListingSuitabilityCollection $listingSuitabilityCollection
     * @return array
     */
    public function transform(Entity\ListingSuitabilityCollection $listingSuitabilityCollection)
    {
        $collection = [];
        $transformer = new ListingSuitability;

        /** @var Entity\ListingSuitability $listingSuitability */
        foreach ($listingSuitabilityCollection as $listingSuitability) {
            $collection[] = $transformer->transform($listingSuitability);
            $transformer->resetFields();
        }

        return $collection;
    }
}

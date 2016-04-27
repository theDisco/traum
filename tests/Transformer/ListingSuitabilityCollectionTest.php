<?php

use Traum\Entity\ListingSuitability;
use Traum\Entity\ListingSuitabilityCollection;
use Traum\Enum\Suitability;
use Traum\Enum\SuitabilityStatus;
use Traum\Transformer;

class ListingSuitabilityCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testTransformCollection()
    {
        $expected = [
            [
                ListingSuitability::SUITABILITY_ID => Suitability::ALLERGY_SUFFERERS,
                ListingSuitability::SUITABILITY_STATUS_ID => SuitabilityStatus::ALLOWED,
            ],
            [
                ListingSuitability::SUITABILITY_ID => Suitability::ASSEMBLERS,
                ListingSuitability::SUITABILITY_STATUS_ID => SuitabilityStatus::NOT_ALLOWED,
            ],
        ];
        $collection = ListingSuitabilityCollection::fromArray($expected);
        $transformer = new Transformer\ListingSuitabilityCollection;
        $result = $transformer->transform($collection);

        $this->assertEquals($expected, $result);
    }
}

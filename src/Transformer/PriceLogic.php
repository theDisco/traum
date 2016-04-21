<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class PriceLogic
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class PriceLogic extends Transformer
{
    /**
     * @param \Traum\Entity\PriceLogic $priceLogic
     * @return array
     */
    public function transform(Entity\PriceLogic $priceLogic)
    {
        $this->addField(Entity\PriceLogic::PRICE_LOGIC_ID, $priceLogic->getPriceLogicId(), 'int');

        return $this->getFields();
    }
}

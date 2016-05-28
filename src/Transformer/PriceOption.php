<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class PriceOption
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class PriceOption extends Transformer
{
    /**
     * @param \Traum\Entity\PriceOption $priceOption
     * @return array
     */
    public function transform(Entity\PriceOption $priceOption)
    {
        $this->addField(
            Entity\PriceOption::PRICE_SCOPE_ID,
            $priceOption->getPriceScopeId(),
            'int'
        );

        $this->addField(
            Entity\PriceOption::PERSON_SELECTOR_ID,
            $priceOption->getPersonSelectorId(),
            'int'
        );

        $this->addField(
            Entity\PriceOption::EXTRA_CHARGE_PERSON_NIGHT,
            $priceOption->getExtraChargePersonNight(),
            'double'
        );
        $this->addField(
            Entity\PriceOption::EXTRA_CHARGE_PERSON_WEEK,
            $priceOption->getExtraChargePersonWeek(),
            'double'
        );
        $this->addField(
            Entity\PriceOption::CURRENCY_CODE,
            $priceOption->getCurrencyCode(),
            'string'
        );

        return $this->getFields();
    }
}

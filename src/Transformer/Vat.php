<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class Vat
 *
 * @package Traum\Transformer
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class Vat extends Transformer
{
    /**
     * @param \Traum\Entity\Vat $vat
     *
     * @return array
     */
    public function transform(Entity\Vat $vat)
    {
        $this->addField(
            Entity\Vat::ENABLE_VAT,
            $vat->getEnableVat(),
            'bool'
        );

        return $this->getFields();
    }
}

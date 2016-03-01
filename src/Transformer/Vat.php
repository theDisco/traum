<?php

namespace Traum\Transformer;

use League\Fractal;
use Traum\Entity;

/**
 * Class Vat
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class Vat extends Fractal\TransformerAbstract
{
    /**
     * @param \Traum\Entity\Vat $vat
     * @return array
     */
    public function transform(Entity\Vat $vat)
    {
        return [
            Entity\Vat::ENABLE_VAT => (bool) $vat->getEnableVat(),
        ];
    }
}

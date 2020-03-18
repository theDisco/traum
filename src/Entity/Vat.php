<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class Vat
 *
 * @package Traum\Entity
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Vat extends Entity
{
    const ENABLE_VAT = 'enable_vat';

    /**
     * @return bool
     */
    public function getEnableVat()
    {
        return $this->getData(self::ENABLE_VAT);
    }

    /**
     * @param  bool $flag
     * @return void
     */
    public function setEnableVat($flag)
    {
        $this->setData(self::ENABLE_VAT, $flag);
    }
}

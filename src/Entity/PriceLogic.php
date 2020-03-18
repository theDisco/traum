<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class PriceLogic
 *
 * @package Traum\Entity
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class PriceLogic extends Entity
{
    const ID = 'id';
    const PRICE_LOGIC_ID = 'price_logic_id';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param  int $id
     * @return void
     */
    public function setId($id)
    {
        $this->setData(self::ID, $id);
    }

    /**
     * @return int
     */
    public function getPriceLogicId()
    {
        return $this->getData(self::PRICE_LOGIC_ID);
    }

    /**
     * @param  int $id
     * @return void
     */
    public function setPriceLogicId($id)
    {
        $this->setData(self::PRICE_LOGIC_ID, $id);
    }
}

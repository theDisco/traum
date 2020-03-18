<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingSuitability
 *
 * @package Traum\Entity
 * @author  Oskar Golde <info@oskargolde.de>
 */
class ListingSuitability extends Entity
{
    const ID = 'id';
    const SUITABILITY_ID = 'suitability_id';
    const SUITABILITY_STATUS_ID = 'suitability_status_id';

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
    public function getSuitabilityId()
    {
        return $this->getData(self::SUITABILITY_ID);
    }

    /**
     * @param  int $id
     * @return void
     */
    public function setSuitabilityId($id)
    {
        $this->setData(self::SUITABILITY_ID, $id);
    }

    /**
     * @return int
     */
    public function getSuitabilityStatusId()
    {
        return $this->getData(self::SUITABILITY_STATUS_ID);
    }

    

    /**
     * @param  int $id
     * @return void
     */
    public function setSuitabilityStatusId($id)
    {
        $this->setData(self::SUITABILITY_STATUS_ID, $id);
    }
}

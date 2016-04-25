<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingLeisureActivity
 * @package Traum\Entity
 * @author Oskar Golde <info@oskargolde.de>
 */
class ListingLeisureActivity extends Entity
{
    const ID = 'id';
    const LEISURE_ACTIVITY_ID = 'leisure_activity_id';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->setData(self::ID, $id);
    }

    /**
     * @return int
     */
    public function getLeisureActivityId()
    {
        return $this->getData(self::LEISURE_ACTIVITY_ID);
    }

    /**
     * @param int $leisureActivityId
     * @return void
     */
    public function setLeisureActivityId($leisureActivityId)
    {
        $this->setData(self::LEISURE_ACTIVITY_ID, $leisureActivityId);
    }
}

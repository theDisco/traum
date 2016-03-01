<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class Listing
 * @package Traum\Entity
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class CustomerListing extends Entity
{
    const ID = 'id';
    const OBJECT_TYPE_ID = 'object_type_id';
    const EMAIL_TYPE_ID = 'email_type_id';

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
    public function getObjectTypeId()
    {
        return $this->getData(self::OBJECT_TYPE_ID);
    }

    /**
     * @param int $objectTypeId
     * @return void
     */
    public function setObjectTypeId($objectTypeId)
    {
        $this->setData(self::OBJECT_TYPE_ID, $objectTypeId);
    }

    /**
     * @return int
     */
    public function getEmailTypeId()
    {
        return $this->getData(self::EMAIL_TYPE_ID);
    }

    /**
     * @param int $emailTypeId
     * @return void
     */
    public function setEmailTypeId($emailTypeId)
    {
        $this->setData(self::EMAIL_TYPE_ID, $emailTypeId);
    }
}

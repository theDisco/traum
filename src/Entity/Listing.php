<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class Listing
 * @package Traum\Entity
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Listing extends Entity
{
    const ID = 'id';
    const ACCESSIBILITY_ID = 'accessibility_id';
    const CLASSIFICATION_STAR_ID = 'classification_star_id';
    const CLASSIFICATION_EXPIRE_DATE = 'classification_expire_date';
    const MAX_PERSONS = 'max_persons';
    const SIZE = 'size';
    const OBJECT_TYPE_ID = 'object_type_id';

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
    public function getAccessibilityId()
    {
        return $this->getData(self::ACCESSIBILITY_ID);
    }

    /**
     * @param int $accessibilityId
     * @return void
     */
    public function setAccessibilityId($accessibilityId)
    {
        $this->setData(self::ACCESSIBILITY_ID, $accessibilityId);
    }

    /**
     * @return int
     */
    public function getClassificationStarId()
    {
        return $this->getData(self::CLASSIFICATION_STAR_ID);
    }

    /**
     * @param int $classificationStarId
     * @return void
     */
    public function setClassificationStarId($classificationStarId)
    {
        $this->setData(self::CLASSIFICATION_STAR_ID, $classificationStarId);
    }

    /**
     * @return string
     */
    public function getClassificationExpireDate()
    {
        return $this->getData(self::CLASSIFICATION_EXPIRE_DATE);
    }

    /**
     * @param string $classificationExpireDate
     * @return void
     */
    public function setClassificationExpireDate($classificationExpireDate)
    {
        $this->setData(self::CLASSIFICATION_EXPIRE_DATE, $classificationExpireDate);
    }

    /**
     * @return int
     */
    public function getMaxPersons()
    {
        return $this->getData(self::MAX_PERSONS);
    }

    /**
     * @param int $maxPersons
     * @return void
     */
    public function setMaxPersons($maxPersons)
    {
        $this->setData(self::MAX_PERSONS, $maxPersons);
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->getData(self::SIZE);
    }

    /**
     * @param int $size
     * @return void
     */
    public function setSize($size)
    {
        $this->setData(self::SIZE, $size);
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
}

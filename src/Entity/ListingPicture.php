<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingPicture
 *
 * @package Traum\Entity
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingPicture extends Entity
{
    const ID = 'id';
    const URL = 'url';
    const CATEGORY_ID = 'category_id';
    const IS_SUMMER_PICTURE = 'is_summer_picture';
    const IS_WINTER_PICTURE = 'is_winter_picture';

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
     * @return string
     */
    public function getUrl()
    {
        return $this->getData(self::URL);
    }

    /**
     * @param  string $url
     * @return void
     */
    public function setUrl($url)
    {
        $this->setData(self::URL, $url);
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->getData(self::CATEGORY_ID);
    }

    /**
     * @param  int $categoryId
     * @return void
     */
    public function setCategoryId($categoryId)
    {
        $this->setData(self::CATEGORY_ID, $categoryId);
    }

    /**
     * @return bool
     */
    public function isSummerPicture()
    {
        return $this->getData(self::IS_SUMMER_PICTURE);
    }

    /**
     * @param  bool $isSummerPicture
     * @return void
     */
    public function setIsSummerPicture($isSummerPicture)
    {
        $this->setData(self::IS_SUMMER_PICTURE, $isSummerPicture);
    }

    /**
     * @return bool
     */
    public function isWinterPicture()
    {
        return $this->getData(self::IS_WINTER_PICTURE);
    }

    /**
     * @param  bool $isWinterPicture
     * @return void
     */
    public function setIsWinterPicture($isWinterPicture)
    {
        $this->setData(self::IS_WINTER_PICTURE, $isWinterPicture);
    }
}

<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingPictureTitle
 * @package Traum\Entity
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingPictureTitle extends Entity
{
    const ID = 'id';
    const TEXT = 'text';
    const LANGUAGE = 'language';

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
     * @return string
     */
    public function getText()
    {
        return $this->getData(self::TEXT);
    }

    /**
     * @param string $text
     * @return void
     */
    public function setText($text)
    {
        $this->setData(self::TEXT, $text);
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->getData(self::LANGUAGE);
    }

    /**
     * @param string $language
     * @return void
     */
    public function setLanguage($language)
    {
        $this->setData(self::TEXT, $language);
    }
}

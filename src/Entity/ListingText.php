<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingText
 *
 * @package Traum\Entity
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingText extends Entity
{
    const ID = 'id';
    const LANGUAGE = 'language';
    const TEXT_TYPE_ID = 'text_type_id';
    const TEXT = 'text';

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
    public function getLanguage()
    {
        return $this->getData(self::LANGUAGE);
    }

    /**
     * @param  string $language
     * @return void
     */
    public function setLanguage($language)
    {
        $this->setData(self::LANGUAGE, $language);
    }

    /**
     * @return int
     */
    public function getTextTypeId()
    {
        return $this->getData(self::TEXT_TYPE_ID);
    }

    /**
     * @param  int $textTypeId
     * @return void
     */
    public function setTextTypeId($textTypeId)
    {
        $this->setData(self::TEXT_TYPE_ID, $textTypeId);
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->getData(self::TEXT);
    }

    /**
     * @param  string $text
     * @return void
     */
    public function setText($text)
    {
        $this->setData(self::TEXT, $text);
    }
}

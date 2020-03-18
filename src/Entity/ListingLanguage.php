<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class ListingLanguage
 *
 * @package Traum\Entity
 * @author  Oskar Golde <info@oskargolde.de>
 */
class ListingLanguage extends Entity
{
    const ID = 'id';
    const LANGUAGE = 'language';

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
}

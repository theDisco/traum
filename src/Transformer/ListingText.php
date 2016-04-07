<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class ListingText
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingText extends Transformer
{
    /**
     * @param \Traum\Entity\ListingText $text
     * @return array
     */
    public function transform(Entity\ListingText $text)
    {
        $this->addField(Entity\ListingText::LANGUAGE, $text->getLanguage(), 'string');
        $this->addField(Entity\ListingText::TEXT_TYPE_ID, $text->getTextTypeId(), 'int');
        $this->addField(Entity\ListingText::TEXT, $text->getText(), 'string');

        return $this->getFields();
    }
}

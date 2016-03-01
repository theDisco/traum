<?php

namespace Traum\Transformer;

use League\Fractal;
use Traum\Entity;

/**
 * Class ListingText
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class ListingText extends Fractal\TransformerAbstract
{
    /**
     * @param \Traum\Entity\ListingText $text
     * @return array
     */
    public function transform(Entity\ListingText $text)
    {
        return [
            Entity\ListingText::LANGUAGE => (string) $text->getLanguage(),
            Entity\ListingText::TEXT_TYPE_ID => (int) $text->getTextTypeId(),
            Entity\ListingText::TEXT => (string) $text->getText(),
        ];
    }
}

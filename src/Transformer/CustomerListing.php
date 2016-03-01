<?php

namespace Traum\Transformer;

use League\Fractal;
use Traum\Entity;

/**
 * Class CustomerListing
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class CustomerListing extends Fractal\TransformerAbstract
{
    /**
     * @param \Traum\Entity\CustomerListing $listing
     * @return array
     */
    public function transform(Entity\CustomerListing $listing)
    {
        return [
            Entity\CustomerListing::OBJECT_TYPE_ID => (int) $listing->getObjectTypeId(),
            Entity\CustomerListing::EMAIL_TYPE_ID => (int) $listing->getEmailTypeId(),
        ];
    }
}

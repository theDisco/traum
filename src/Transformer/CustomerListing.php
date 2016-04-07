<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class CustomerListing
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class CustomerListing extends Transformer
{
    /**
     * @param \Traum\Entity\CustomerListing $listing
     * @return array
     */
    public function transform(Entity\CustomerListing $listing)
    {
        $this->addField(Entity\CustomerListing::OBJECT_TYPE_ID , $listing->getObjectTypeId(), 'int');
        $this->addField(Entity\CustomerListing::EMAIL_TYPE_ID , $listing->getEmailTypeId(), 'int');

        return $this->getFields(); 
    }
}

<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class Register
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Register extends Transformer
{
    /**
     * @param \Traum\Entity\Register $register
     * @return array
     */
    public function transform(Entity\Register $register)
    {
        $this->addField(Entity\Register::FIRST_NAME, $register->getFirstName(), 'string');
        $this->addField(Entity\Register::LAST_NAME, $register->getLastName(), 'int');
        $this->addField(Entity\Register::COMPANY, $register->getCompany(), 'string');
        $this->addField(Entity\Register::EMAIL, $register->getEmail(), 'string');
        $this->addField(Entity\Register::SALUTATION_ID, $register->getSalutationId(), 'int');
        $this->addField(Entity\Register::PASSWORD, $register->getPassword(), 'string');

        return $this->getFields();
    }
}

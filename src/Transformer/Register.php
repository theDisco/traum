<?php

namespace Traum\Transformer;

use League\Fractal;
use Traum\Entity;

/**
 * Class Register
 * @package Traum\Transformer
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Register extends Fractal\TransformerAbstract
{
    /**
     * @param \Traum\Entity\Register $register
     * @return array
     */
    public function transform(Entity\Register $register)
    {
        return [
            Entity\Register::FIRST_NAME => $register->getFirstName(),
            Entity\Register::LAST_NAME => $register->getLastName(),
            Entity\Register::COMPANY => $register->getCompany(),
            Entity\Register::EMAIL => $register->getEmail(),
            Entity\Register::SALUTATION_ID => (int) $register->getSalutationId(),
            Entity\Register::PASSWORD => $register->getPassword(),
        ];
    }
}

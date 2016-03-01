<?php

namespace Traum\Entity;

use Traum\Collection;
use Traum\Entity;

/**
 * Class CustomerCollection
 * @package Traum\Entity
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class CustomerCollection extends Collection
{
    /**
     * @return string
     */
    protected function collection()
    {
        return 'customer';
    }

    /**
     * @param array $data
     * @return \Traum\Entity\Customer
     */
    function createEntity(array $data)
    {
        return new Entity\Customer($data);
    }

}

<?php

namespace Traum\Enum;

/**
 * Interface Suitability
 *
 * @package Traum\Enum
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
interface SuitabilityStatus
{
    const ALLOWED = 1;
    const NOT_ALLOWED = 2;
    const ON_REQUEST = 3;
}

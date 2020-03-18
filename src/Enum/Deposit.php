<?php

namespace Traum\Enum;

/**
 * Interface Deposit
 *
 * @package Traum\Enum
 * @author  Oskar Golde <info@oskargolde.de>
 */
interface Deposit
{
    const NO_DEPOSIT = 1;
    /**
 * deposit in percent based on the price 
*/
    const DEPOSIT_PERCENTAGE_OF_TOTAL_PRICE = 2;
    /**
 * deposit as number in the current object currency 
*/
    const DEPOSIT_FIXED_PRICE = 3;
}

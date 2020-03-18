<?php

namespace Traum\Enum;

/**
 * Interface PaymentOption
 *
 * @package Traum\Enum
 * @author  Oskar Golde <info@oskargolde.de>
 */
interface PaymentOption
{
    /**
 * prepayment as number in the current object currency 
*/
    const PREPAYMENT_FIXED_PRICE = 1;
    /**
 * prepayment in percent based on the total price 
*/
    const PREPAYMENT_PERCENTAGE_OF_TOTAL_PRICE = 2;
    const NO_PREPAYMENT = 3;
}

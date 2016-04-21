<?php

namespace Traum\Enum;

/**
 * Interface PaymentMethod
 * @package Traum\Enum
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
interface PaymentMethod
{
    const CREDIT_CARD = 1;
    const CASH = 2;
    const BANK_TRANSFER = 3;
    const CASH_CARD = 4;
    const PAYPAL = 5;
}

<?php

namespace Traum\Enum;

/**
 * Interface FinalPayment
 * @package Traum\Enum
 * @author Oskar Golde <info@oskargolde.de>
 */
interface FinalPayment
{
    const IN_CONSULTION = -2;
    const WITH_BOOKING = -1;
    const AT_ARRIVAL = 1;
    const AT_DEPARTURE = 2;
    const ONE_WEEK_BEFORE_ARRIVAL = 3;
    const TWO_WEEKS_BEFORE_ARRIVAL = 4;
    const THREE_WEEKS_BEFORE_ARRIVAL = 5;
    const FOUR_WEEKS_BEFORE_ARRIVAL = 6;
    const FIVE_WEEKS_BEFORE_ARRIVAL = 7;
    const SIX_WEEKS_BEFORE_ARRIVAL = 8;
}

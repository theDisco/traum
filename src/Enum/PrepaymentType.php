<?php

namespace Traum\Enum;

/**
 * Interface PrepaymentType
 * @package Traum\Enum
 * @author Oskar Golde <info@oskargolde.de>
 */
interface PrepaymentType
{
    const IN_CONSULTION = -1;
    const WITH_BOOKING = 1;
    const AT_ARRIVAL = 2;
    const ONE_WEEK_BEFORE_ARRIVAL = 3;
    const TWO_WEEKS_BEFORE_ARRIVAL = 4;
    const THREE_WEEKS_BEFORE_ARRIVAL = 5;
    const FOUR_WEEKS_BEFORE_ARRIVAL = 6;
    const FIVE_WEEKS_BEFORE_ARRIVAL = 7;
    const SIX_WEEKS_BEFORE_ARRIVAL = 8;
}

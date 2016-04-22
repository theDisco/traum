<?php

namespace Traum\Enum;

/**
 * Interface Arrival
 * @package Traum\Enum
 * @author Oskar Golde <info@oskargolde.de>
 */
interface Arrival
{
    const ON_AGREEMENT = -2;
    const EVERY_DAY = -1;
    const ON_MONDAYS = 1;
    const ON_TUESDAYS = 2;
    const ON_WEDNESDAYS = 3;
    const ON_THURSDAYS = 4;
    const ON_FRIDAYS = 5;
    const ON_SATURDAYS = 6;
    const ON_SUNDAYS = 7;
}

<?php

namespace Traum\Enum;

/**
 * Interface Season
 * @package Traum\Enum
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
interface Season
{
    const PEAK_SEASON = 1;
    const OFF_SEASON = 2;
    const MID_SEASON = 3;
    const ALL_SEASON = 6;
    const EASTER = 7;
    const ASCENSION_DAY = 8;
    const PENTECOST = 9;
    const CHRISTMAS = 10;
    const NEW_YEARS_EVE = 11;
    const CHRISTMAS_NEW_YEARS_EVE = 12;
    const NOT_BOOKABLE = 13;
}

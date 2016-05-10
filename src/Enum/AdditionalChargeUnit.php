<?php

namespace Traum\Enum;

/**
 * Interface AdditionalChargeUnit
 * @package Traum\Enum
 * @author Oskar Golde <info@oskargolde.de>
 */
interface AdditionalChargeUnit
{
    const INCLUSIVE = 1;
    const PER_PERSON = 2;
    const PER_OBJECT = 3;
    const PER_ROOM = 4;
    const UNIQUE = 5;
    const PER_KWH = 6;
    const PER_CUBIC_METER = 7;
    const PER_MINUTE = 8;
    const PER_HOUR = 9;
    const PER_NIGHT = 10;
    const PER_WEEK = 11;
    const PER_DAY = 12;
    const PER_USAGE = 13;
    const OPTIONAL = 14;
    const PER_LITER = 15;
}

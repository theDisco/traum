<?php

namespace Traum\Enum;

/**
 * Interface Suitability
 * @package Traum\Enum
 * @author Oskar Golde <info@oskargolde.de>
 */
interface Suitability
{
    /* suitability_id */
    const ALLERGY_SUFFERERS = 901;
    const HANDICAPPED_PERSONS = 902;
    const NON_SMOKERS = 903;
    const PETS = 904;
    const HORSES = 905;
    const DOGS = 906;
    const WHEELCHAIR_ACCESSIBLE = 910;
    const FAMILIES = 912;
    const SENIOR_CITIZENS = 916;
    const BABIES = 917;
    const LONG_TERM_VACATIONS = 918;
    const BARRIER_FREE = 919;
    const ASSEMBLERS = 920;

    /* suitability_status_id */
    const ALLOWED = 1;
    const NOT_ALLOWED = 2;
    const ON_REQUEST = 3;
}

<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

class TimeframeOptionsEnum
{
    public const DAYTIME = 'Daytime';

    public const TODAY = 'Today';

    public const SAMEDAY = 'Sameday';

    public const EVENING = 'Evening';

    public const MORNING = 'Morning';

    public const NOON = 'Noon';

    public const SUNDAY = 'Sunday';

    public const AFTERNOON = 'Afternoon';

    private const _ALL_VALUES = [
        self::DAYTIME,
        self::TODAY,
        self::SAMEDAY,
        self::EVENING,
        self::MORNING,
        self::NOON,
        self::SUNDAY,
        self::AFTERNOON
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for TimeframeOptionsEnum.");
    }
}

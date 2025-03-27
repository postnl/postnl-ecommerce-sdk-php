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

class CheckoutOptionEnum
{
    public const DAYTIME = 'Daytime';

    public const EVENING = 'Evening';

    public const SUNDAY = 'Sunday';

    public const SAMEDAY = 'Sameday';

    public const TODAY = 'Today';

    public const ENUM_08001000 = '08:00-10:00';

    public const ENUM_08001200 = '08:00-12:00';

    public const ENUM_08001700 = '08:00-17:00';

    public const PICKUP = 'Pickup';

    private const _ALL_VALUES = [
        self::DAYTIME,
        self::EVENING,
        self::SUNDAY,
        self::SAMEDAY,
        self::TODAY,
        self::ENUM_08001000,
        self::ENUM_08001200,
        self::ENUM_08001700,
        self::PICKUP
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
        throw new Exception("$value is invalid for CheckoutOptionEnum.");
    }
}

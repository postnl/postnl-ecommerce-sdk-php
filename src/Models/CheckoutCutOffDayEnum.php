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

/**
 * The day for which the cutoff time applies. 00 is your default cutoff that applies to all otherwise
 * not specified days, 01 to 07 is Monday to Sunday.
 */
class CheckoutCutOffDayEnum
{
    public const ENUM_00 = '00';

    public const ENUM_01 = '01';

    public const ENUM_02 = '02';

    public const ENUM_03 = '03';

    public const ENUM_04 = '04';

    public const ENUM_05 = '05';

    public const ENUM_06 = '06';

    public const ENUM_07 = '07';

    private const _ALL_VALUES = [
        self::ENUM_00,
        self::ENUM_01,
        self::ENUM_02,
        self::ENUM_03,
        self::ENUM_04,
        self::ENUM_05,
        self::ENUM_06,
        self::ENUM_07
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
        throw new Exception("$value is invalid for CheckoutCutOffDayEnum.");
    }
}

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

class TypeEnum
{
    public const ENUM_2S = '2S';

    public const ENUM_3S = '3S';

    public const CC = 'CC';

    public const CP = 'CP';

    public const CD = 'CD';

    public const CF = 'CF';

    public const LA = 'LA';

    public const RI = 'RI';

    public const UE = 'UE';

    private const _ALL_VALUES =
        [self::ENUM_2S, self::ENUM_3S, self::CC, self::CP, self::CD, self::CF, self::LA, self::RI, self::UE];

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
        throw new Exception("$value is invalid for TypeEnum.");
    }
}

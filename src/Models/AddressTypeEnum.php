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
 * Address type. 01 is for the receiver address, 02 is for the sender address.
 */
class AddressTypeEnum
{
    public const ENUM_01 = '01';

    public const ENUM_02 = '02';

    private const _ALL_VALUES = [self::ENUM_01, self::ENUM_02];

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
        throw new Exception("$value is invalid for AddressTypeEnum.");
    }
}

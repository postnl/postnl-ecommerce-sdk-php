<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib;

use Core\Utils\CoreHelper;
use Core\Utils\JsonHelper;

/**
 * API utility class.
 */
class ApiHelper
{
    /**
     * @var JsonHelper
     */
    private static $jsonHelper;

    public static function getJsonHelper(): JsonHelper
    {
        if (self::$jsonHelper == null) {
            self::$jsonHelper = new JsonHelper([], [], null, 'PostnlEcommerceLib\\Models');
        }
        return self::$jsonHelper;
    }

    /**
     * Serialize any given mixed value.
     *
     * @param mixed $value Any value to be serialized
     *
     * @return string|null serialized value
     */
    public static function serialize($value): ?string
    {
        return CoreHelper::serialize($value);
    }

    /**
     * Deserialize a Json string.
     *
     * @param string $json A valid Json string
     *
     * @return mixed Decoded Json
     */
    public static function deserialize(string $json)
    {
        return CoreHelper::deserialize($json);
    }

    /**
     * Converts the properties to a human-readable string representation.
     *
     * Sample output:
     *
     * $prefix [$properties:key: $properties:value, $processedProperties]
     */
    public static function stringify(
        string $prefix,
        array $properties,
        string $processedProperties = ''
    ): string {
        return CoreHelper::stringify($prefix, $properties, $processedProperties);
    }
}

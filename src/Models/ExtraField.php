<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models;

use PostnlEcommerceLib\ApiHelper;
use stdClass;

class ExtraField implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $key;

    /**
     * @var string|null
     */
    private $value;

    /**
     * Returns Key.
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     *
     * @maps Key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * @maps Value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * Converts the ExtraField object to a human-readable string representation.
     *
     * @return string The string representation of the ExtraField object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('ExtraField', ['key' => $this->key, 'value' => $this->value]);
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->key)) {
            $json['Key']   = $this->key;
        }
        if (isset($this->value)) {
            $json['Value'] = $this->value;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

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

/**
 * The options belonging to the pickup location. The delivery options RETA, UL, PU, DO, BW, RT and BWUL
 * can be shown in the response. Please ignore these codes. These codes are internal PostNL codes.
 */
class DeliveryOptions implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $string;

    /**
     * Returns String.
     *
     * @return string[]|null
     */
    public function getString(): ?array
    {
        return $this->string;
    }

    /**
     * Sets String.
     *
     * @maps string
     *
     * @param string[]|null $string
     */
    public function setString(?array $string): void
    {
        $this->string = $string;
    }

    /**
     * Converts the DeliveryOptions object to a human-readable string representation.
     *
     * @return string The string representation of the DeliveryOptions object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('DeliveryOptions', ['string' => $this->string]);
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
        if (isset($this->string)) {
            $json['string'] = $this->string;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

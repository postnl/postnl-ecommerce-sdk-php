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
 * The option for which no timeframe was calculated for a specific date
 */
class NoTimeframesOptions implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $string;

    /**
     * Returns String.
     */
    public function getString(): ?string
    {
        return $this->string;
    }

    /**
     * Sets String.
     *
     * @maps string
     * @factory \PostnlEcommerceLib\Models\TimeframeOptionsEnum::checkValue
     */
    public function setString(?string $string): void
    {
        $this->string = $string;
    }

    /**
     * Converts the NoTimeframesOptions object to a human-readable string representation.
     *
     * @return string The string representation of the NoTimeframesOptions object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('NoTimeframesOptions', ['string' => $this->string]);
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
            $json['string'] = TimeframeOptionsEnum::checkValue($this->string);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

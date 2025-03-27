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
 * The delivery options for which a delivery date is returned. Only one delivery option is specified.
 * See [Delivery Options](https://developer.postnl.nl/docs/#/http/reference-data/reference-
 * codes/delivery-options) for possible values.
 */
class DeliverydateOptions implements \JsonSerializable
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
     * @factory \PostnlEcommerceLib\Models\DeliverydateOptionEnum::checkValue
     */
    public function setString(?string $string): void
    {
        $this->string = $string;
    }

    /**
     * Converts the DeliverydateOptions object to a human-readable string representation.
     *
     * @return string The string representation of the DeliverydateOptions object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('DeliverydateOptions', ['string' => $this->string]);
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
            $json['string'] = DeliverydateOptionEnum::checkValue($this->string);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

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

class ShippingstatusProductOptions implements \JsonSerializable
{
    /**
     * @var ShippingstatusProductOption|null
     */
    private $productOption;

    /**
     * Returns Product Option.
     */
    public function getProductOption(): ?ShippingstatusProductOption
    {
        return $this->productOption;
    }

    /**
     * Sets Product Option.
     *
     * @maps ProductOption
     */
    public function setProductOption(?ShippingstatusProductOption $productOption): void
    {
        $this->productOption = $productOption;
    }

    /**
     * Converts the ShippingstatusProductOptions object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingstatusProductOptions object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('ShippingstatusProductOptions', ['productOption' => $this->productOption]);
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
        if (isset($this->productOption)) {
            $json['ProductOption'] = $this->productOption;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

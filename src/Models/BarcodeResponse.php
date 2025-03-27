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

class BarcodeResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $barcode;

    /**
     * Returns Barcode.
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * Sets Barcode.
     *
     * @maps Barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * Converts the BarcodeResponse object to a human-readable string representation.
     *
     * @return string The string representation of the BarcodeResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('BarcodeResponse', ['barcode' => $this->barcode]);
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
        if (isset($this->barcode)) {
            $json['Barcode'] = $this->barcode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

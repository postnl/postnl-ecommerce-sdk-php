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

class ShippingstatusResponseSignature implements \JsonSerializable
{
    /**
     * @var Signature|null
     */
    private $signature;

    /**
     * @var Warnings|null
     */
    private $warnings;

    /**
     * Returns Signature.
     */
    public function getSignature(): ?Signature
    {
        return $this->signature;
    }

    /**
     * Sets Signature.
     *
     * @maps Signature
     */
    public function setSignature(?Signature $signature): void
    {
        $this->signature = $signature;
    }

    /**
     * Returns Warnings.
     */
    public function getWarnings(): ?Warnings
    {
        return $this->warnings;
    }

    /**
     * Sets Warnings.
     *
     * @maps Warnings
     */
    public function setWarnings(?Warnings $warnings): void
    {
        $this->warnings = $warnings;
    }

    /**
     * Converts the ShippingstatusResponseSignature object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingstatusResponseSignature object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ShippingstatusResponseSignature',
            ['signature' => $this->signature, 'warnings' => $this->warnings]
        );
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
        if (isset($this->signature)) {
            $json['Signature'] = $this->signature;
        }
        if (isset($this->warnings)) {
            $json['Warnings']  = $this->warnings;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

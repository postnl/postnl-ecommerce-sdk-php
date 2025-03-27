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

class Warnings implements \JsonSerializable
{
    /**
     * @var ShippingstatusWarning|null
     */
    private $warning;

    /**
     * Returns Warning.
     */
    public function getWarning(): ?ShippingstatusWarning
    {
        return $this->warning;
    }

    /**
     * Sets Warning.
     *
     * @maps Warning
     */
    public function setWarning(?ShippingstatusWarning $warning): void
    {
        $this->warning = $warning;
    }

    /**
     * Converts the Warnings object to a human-readable string representation.
     *
     * @return string The string representation of the Warnings object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Warnings', ['warning' => $this->warning]);
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
        if (isset($this->warning)) {
            $json['Warning'] = $this->warning;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

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

class FaultShippingStatusAPI implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $faultstring;

    /**
     * @var Detail|null
     */
    private $detail;

    /**
     * Returns Faultstring.
     */
    public function getFaultstring(): ?string
    {
        return $this->faultstring;
    }

    /**
     * Sets Faultstring.
     *
     * @maps faultstring
     */
    public function setFaultstring(?string $faultstring): void
    {
        $this->faultstring = $faultstring;
    }

    /**
     * Returns Detail.
     */
    public function getDetail(): ?Detail
    {
        return $this->detail;
    }

    /**
     * Sets Detail.
     *
     * @maps detail
     */
    public function setDetail(?Detail $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * Converts the FaultShippingStatusAPI object to a human-readable string representation.
     *
     * @return string The string representation of the FaultShippingStatusAPI object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FaultShippingStatusAPI',
            ['faultstring' => $this->faultstring, 'detail' => $this->detail]
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
        if (isset($this->faultstring)) {
            $json['faultstring'] = $this->faultstring;
        }
        if (isset($this->detail)) {
            $json['detail']      = $this->detail;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

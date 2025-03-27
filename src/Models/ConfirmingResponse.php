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

class ConfirmingResponse implements \JsonSerializable
{
    /**
     * @var ConfirmingResponseShipment[]|null
     */
    private $responseShipments;

    /**
     * Returns Response Shipments.
     *
     * @return ConfirmingResponseShipment[]|null
     */
    public function getResponseShipments(): ?array
    {
        return $this->responseShipments;
    }

    /**
     * Sets Response Shipments.
     *
     * @maps ResponseShipments
     *
     * @param ConfirmingResponseShipment[]|null $responseShipments
     */
    public function setResponseShipments(?array $responseShipments): void
    {
        $this->responseShipments = $responseShipments;
    }

    /**
     * Converts the ConfirmingResponse object to a human-readable string representation.
     *
     * @return string The string representation of the ConfirmingResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('ConfirmingResponse', ['responseShipments' => $this->responseShipments]);
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
        if (isset($this->responseShipments)) {
            $json['ResponseShipments'] = $this->responseShipments;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

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
 * The current status and old statuses of the shipment
 */
class CompleteStatus implements \JsonSerializable
{
    /**
     * @var CompleteStatusShipment|null
     */
    private $shipment;

    /**
     * Returns Shipment.
     */
    public function getShipment(): ?CompleteStatusShipment
    {
        return $this->shipment;
    }

    /**
     * Sets Shipment.
     *
     * @maps Shipment
     */
    public function setShipment(?CompleteStatusShipment $shipment): void
    {
        $this->shipment = $shipment;
    }

    /**
     * Converts the CompleteStatus object to a human-readable string representation.
     *
     * @return string The string representation of the CompleteStatus object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('CompleteStatus', ['shipment' => $this->shipment]);
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
        if (isset($this->shipment)) {
            $json['Shipment'] = $this->shipment;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

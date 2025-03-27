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

class ShippingstatusResponse implements \JsonSerializable
{
    /**
     * @var CompleteStatus|null
     */
    private $completeStatus;

    /**
     * @var CurrentStatus|null
     */
    private $currentStatus;

    /**
     * @var ShippingstatusWarning[]|null
     */
    private $warnings;

    /**
     * Returns Complete Status.
     * The current status and old statuses of the shipment
     */
    public function getCompleteStatus(): ?CompleteStatus
    {
        return $this->completeStatus;
    }

    /**
     * Sets Complete Status.
     * The current status and old statuses of the shipment
     *
     * @maps CompleteStatus
     */
    public function setCompleteStatus(?CompleteStatus $completeStatus): void
    {
        $this->completeStatus = $completeStatus;
    }

    /**
     * Returns Current Status.
     * The current status and old statuses of the shipment
     */
    public function getCurrentStatus(): ?CurrentStatus
    {
        return $this->currentStatus;
    }

    /**
     * Sets Current Status.
     * The current status and old statuses of the shipment
     *
     * @maps CurrentStatus
     */
    public function setCurrentStatus(?CurrentStatus $currentStatus): void
    {
        $this->currentStatus = $currentStatus;
    }

    /**
     * Returns Warnings.
     * Possible warnings (see [Error Codes](https://developer.postnl.nl/docs/#/http/reference-data/error-
     * codes) for possible values)
     *
     * @return ShippingstatusWarning[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * Sets Warnings.
     * Possible warnings (see [Error Codes](https://developer.postnl.nl/docs/#/http/reference-data/error-
     * codes) for possible values)
     *
     * @maps Warnings
     *
     * @param ShippingstatusWarning[]|null $warnings
     */
    public function setWarnings(?array $warnings): void
    {
        $this->warnings = $warnings;
    }

    /**
     * Converts the ShippingstatusResponse object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingstatusResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ShippingstatusResponse',
            [
                'completeStatus' => $this->completeStatus,
                'currentStatus' => $this->currentStatus,
                'warnings' => $this->warnings
            ]
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
        if (isset($this->completeStatus)) {
            $json['CompleteStatus'] = $this->completeStatus;
        }
        if (isset($this->currentStatus)) {
            $json['CurrentStatus']  = $this->currentStatus;
        }
        if (isset($this->warnings)) {
            $json['Warnings']       = $this->warnings;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

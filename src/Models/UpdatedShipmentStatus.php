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
 * The status update. See [Status codes](https://developer.postnl.nl/docs/#/http/reference-data/error-
 * codes) for possible values.
 */
class UpdatedShipmentStatus implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $timestamp;

    /**
     * @var string|null
     */
    private $statusCode;

    /**
     * @var string|null
     */
    private $statusDescription;

    /**
     * @var string|null
     */
    private $phaseCode;

    /**
     * @var string|null
     */
    private $phaseDescription;

    /**
     * Returns Timestamp.
     * The timestamp of the update
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     * The timestamp of the update
     *
     * @maps Timestamp
     */
    public function setTimestamp(?string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Status Code.
     * The status code
     */
    public function getStatusCode(): ?string
    {
        return $this->statusCode;
    }

    /**
     * Sets Status Code.
     * The status code
     *
     * @maps StatusCode
     */
    public function setStatusCode(?string $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    /**
     * Returns Status Description.
     * The status description
     */
    public function getStatusDescription(): ?string
    {
        return $this->statusDescription;
    }

    /**
     * Sets Status Description.
     * The status description
     *
     * @maps StatusDescription
     */
    public function setStatusDescription(?string $statusDescription): void
    {
        $this->statusDescription = $statusDescription;
    }

    /**
     * Returns Phase Code.
     * The phase code
     */
    public function getPhaseCode(): ?string
    {
        return $this->phaseCode;
    }

    /**
     * Sets Phase Code.
     * The phase code
     *
     * @maps PhaseCode
     */
    public function setPhaseCode(?string $phaseCode): void
    {
        $this->phaseCode = $phaseCode;
    }

    /**
     * Returns Phase Description.
     * The phase description
     */
    public function getPhaseDescription(): ?string
    {
        return $this->phaseDescription;
    }

    /**
     * Sets Phase Description.
     * The phase description
     *
     * @maps PhaseDescription
     */
    public function setPhaseDescription(?string $phaseDescription): void
    {
        $this->phaseDescription = $phaseDescription;
    }

    /**
     * Converts the UpdatedShipmentStatus object to a human-readable string representation.
     *
     * @return string The string representation of the UpdatedShipmentStatus object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdatedShipmentStatus',
            [
                'timestamp' => $this->timestamp,
                'statusCode' => $this->statusCode,
                'statusDescription' => $this->statusDescription,
                'phaseCode' => $this->phaseCode,
                'phaseDescription' => $this->phaseDescription
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
        if (isset($this->timestamp)) {
            $json['Timestamp']         = $this->timestamp;
        }
        if (isset($this->statusCode)) {
            $json['StatusCode']        = $this->statusCode;
        }
        if (isset($this->statusDescription)) {
            $json['StatusDescription'] = $this->statusDescription;
        }
        if (isset($this->phaseCode)) {
            $json['PhaseCode']         = $this->phaseCode;
        }
        if (isset($this->phaseDescription)) {
            $json['PhaseDescription']  = $this->phaseDescription;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

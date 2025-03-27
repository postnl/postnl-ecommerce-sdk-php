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

class Event implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $destinationLocationCode;

    /**
     * @var string|null
     */
    private $locationCode;

    /**
     * @var string|null
     */
    private $routeCode;

    /**
     * @var string|null
     */
    private $routeNumber;

    /**
     * @var string|null
     */
    private $timeStamp;

    /**
     * Returns Code.
     * The event code
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * The event code
     *
     * @maps Code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Description.
     * The event description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The event description
     *
     * @maps Description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Destination Location Code.
     * Location code of the destination
     */
    public function getDestinationLocationCode(): ?string
    {
        return $this->destinationLocationCode;
    }

    /**
     * Sets Destination Location Code.
     * Location code of the destination
     *
     * @maps DestinationLocationCode
     */
    public function setDestinationLocationCode(?string $destinationLocationCode): void
    {
        $this->destinationLocationCode = $destinationLocationCode;
    }

    /**
     * Returns Location Code.
     * The current location code
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * Sets Location Code.
     * The current location code
     *
     * @maps LocationCode
     */
    public function setLocationCode(?string $locationCode): void
    {
        $this->locationCode = $locationCode;
    }

    /**
     * Returns Route Code.
     * The route code
     */
    public function getRouteCode(): ?string
    {
        return $this->routeCode;
    }

    /**
     * Sets Route Code.
     * The route code
     *
     * @maps RouteCode
     */
    public function setRouteCode(?string $routeCode): void
    {
        $this->routeCode = $routeCode;
    }

    /**
     * Returns Route Number.
     * The route number
     */
    public function getRouteNumber(): ?string
    {
        return $this->routeNumber;
    }

    /**
     * Sets Route Number.
     * The route number
     *
     * @maps RouteNumber
     */
    public function setRouteNumber(?string $routeNumber): void
    {
        $this->routeNumber = $routeNumber;
    }

    /**
     * Returns Time Stamp.
     * Timestamp of the event
     */
    public function getTimeStamp(): ?string
    {
        return $this->timeStamp;
    }

    /**
     * Sets Time Stamp.
     * Timestamp of the event
     *
     * @maps TimeStamp
     */
    public function setTimeStamp(?string $timeStamp): void
    {
        $this->timeStamp = $timeStamp;
    }

    /**
     * Converts the Event object to a human-readable string representation.
     *
     * @return string The string representation of the Event object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Event',
            [
                'code' => $this->code,
                'description' => $this->description,
                'destinationLocationCode' => $this->destinationLocationCode,
                'locationCode' => $this->locationCode,
                'routeCode' => $this->routeCode,
                'routeNumber' => $this->routeNumber,
                'timeStamp' => $this->timeStamp
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
        if (isset($this->code)) {
            $json['Code']                    = $this->code;
        }
        if (isset($this->description)) {
            $json['Description']             = $this->description;
        }
        if (isset($this->destinationLocationCode)) {
            $json['DestinationLocationCode'] = $this->destinationLocationCode;
        }
        if (isset($this->locationCode)) {
            $json['LocationCode']            = $this->locationCode;
        }
        if (isset($this->routeCode)) {
            $json['RouteCode']               = $this->routeCode;
        }
        if (isset($this->routeNumber)) {
            $json['RouteNumber']             = $this->routeNumber;
        }
        if (isset($this->timeStamp)) {
            $json['TimeStamp']               = $this->timeStamp;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

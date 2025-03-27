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

class GetLocationsResultSingle implements \JsonSerializable
{
    /**
     * @var Location|null
     */
    private $responseLocation;

    /**
     * Returns Response Location.
     */
    public function getResponseLocation(): ?Location
    {
        return $this->responseLocation;
    }

    /**
     * Sets Response Location.
     *
     * @maps ResponseLocation
     */
    public function setResponseLocation(?Location $responseLocation): void
    {
        $this->responseLocation = $responseLocation;
    }

    /**
     * Converts the GetLocationsResultSingle object to a human-readable string representation.
     *
     * @return string The string representation of the GetLocationsResultSingle object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('GetLocationsResultSingle', ['responseLocation' => $this->responseLocation]);
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
        if (isset($this->responseLocation)) {
            $json['ResponseLocation'] = $this->responseLocation;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

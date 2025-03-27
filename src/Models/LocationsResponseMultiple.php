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

class LocationsResponseMultiple implements \JsonSerializable
{
    /**
     * @var GetLocationsResultMultiple|null
     */
    private $getLocationsResult;

    /**
     * Returns Get Locations Result.
     */
    public function getGetLocationsResult(): ?GetLocationsResultMultiple
    {
        return $this->getLocationsResult;
    }

    /**
     * Sets Get Locations Result.
     *
     * @maps GetLocationsResult
     */
    public function setGetLocationsResult(?GetLocationsResultMultiple $getLocationsResult): void
    {
        $this->getLocationsResult = $getLocationsResult;
    }

    /**
     * Converts the LocationsResponseMultiple object to a human-readable string representation.
     *
     * @return string The string representation of the LocationsResponseMultiple object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LocationsResponseMultiple',
            ['getLocationsResult' => $this->getLocationsResult]
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
        if (isset($this->getLocationsResult)) {
            $json['GetLocationsResult'] = $this->getLocationsResult;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

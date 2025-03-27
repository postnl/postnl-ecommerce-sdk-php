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

class PostalcodeCheckAddress implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string|null
     */
    private $streetName;

    /**
     * @var int|null
     */
    private $houseNumber;

    /**
     * @var string|null
     */
    private $houseNumberAddition;

    /**
     * @var string[]|null
     */
    private $formattedAddress;

    /**
     * Returns City.
     * City of requested address
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * City of requested address
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Postal Code.
     * Postalcode of requested address
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Sets Postal Code.
     * Postalcode of requested address
     *
     * @maps postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Returns Street Name.
     * Street of requested address
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    /**
     * Sets Street Name.
     * Street of requested address
     *
     * @maps streetName
     */
    public function setStreetName(?string $streetName): void
    {
        $this->streetName = $streetName;
    }

    /**
     * Returns House Number.
     * Housenumber of requested address
     */
    public function getHouseNumber(): ?int
    {
        return $this->houseNumber;
    }

    /**
     * Sets House Number.
     * Housenumber of requested address
     *
     * @maps houseNumber
     */
    public function setHouseNumber(?int $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * Returns House Number Addition.
     * Housenumber addition
     */
    public function getHouseNumberAddition(): ?string
    {
        return $this->houseNumberAddition;
    }

    /**
     * Sets House Number Addition.
     * Housenumber addition
     *
     * @maps houseNumberAddition
     */
    public function setHouseNumberAddition(?string $houseNumberAddition): void
    {
        $this->houseNumberAddition = $houseNumberAddition;
    }

    /**
     * Returns Formatted Address.
     * Full formatted address according to PostNL standard (returns each line as a separate string)
     *
     * @return string[]|null
     */
    public function getFormattedAddress(): ?array
    {
        return $this->formattedAddress;
    }

    /**
     * Sets Formatted Address.
     * Full formatted address according to PostNL standard (returns each line as a separate string)
     *
     * @maps formattedAddress
     *
     * @param string[]|null $formattedAddress
     */
    public function setFormattedAddress(?array $formattedAddress): void
    {
        $this->formattedAddress = $formattedAddress;
    }

    /**
     * Converts the PostalcodeCheckAddress object to a human-readable string representation.
     *
     * @return string The string representation of the PostalcodeCheckAddress object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PostalcodeCheckAddress',
            [
                'city' => $this->city,
                'postalCode' => $this->postalCode,
                'streetName' => $this->streetName,
                'houseNumber' => $this->houseNumber,
                'houseNumberAddition' => $this->houseNumberAddition,
                'formattedAddress' => $this->formattedAddress
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
        if (isset($this->city)) {
            $json['city']                = $this->city;
        }
        if (isset($this->postalCode)) {
            $json['postalCode']          = $this->postalCode;
        }
        if (isset($this->streetName)) {
            $json['streetName']          = $this->streetName;
        }
        if (isset($this->houseNumber)) {
            $json['houseNumber']         = $this->houseNumber;
        }
        if (isset($this->houseNumberAddition)) {
            $json['houseNumberAddition'] = $this->houseNumberAddition;
        }
        if (isset($this->formattedAddress)) {
            $json['formattedAddress']    = $this->formattedAddress;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

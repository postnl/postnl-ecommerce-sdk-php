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

class CheckoutLocation implements \JsonSerializable
{
    /**
     * @var CheckoutPickupAddress|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $pickupTime;

    /**
     * @var OpeningHours|null
     */
    private $openingHours;

    /**
     * @var int|null
     */
    private $distance;

    /**
     * @var string|null
     */
    private $locationCode;

    /**
     * @var string|null
     */
    private $partnerID;

    /**
     * @var Sustainability|null
     */
    private $sustainability;

    /**
     * Returns Address.
     * The pickup location address
     */
    public function getAddress(): ?CheckoutPickupAddress
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * The pickup location address
     *
     * @maps Address
     */
    public function setAddress(?CheckoutPickupAddress $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Pickup Time.
     * Time from when the parcel can be retrieved at the pickup location
     */
    public function getPickupTime(): ?string
    {
        return $this->pickupTime;
    }

    /**
     * Sets Pickup Time.
     * Time from when the parcel can be retrieved at the pickup location
     *
     * @maps PickupTime
     */
    public function setPickupTime(?string $pickupTime): void
    {
        $this->pickupTime = $pickupTime;
    }

    /**
     * Returns Opening Hours.
     * The standard opening hours of the pickup location
     */
    public function getOpeningHours(): ?OpeningHours
    {
        return $this->openingHours;
    }

    /**
     * Sets Opening Hours.
     * The standard opening hours of the pickup location
     *
     * @maps OpeningHours
     */
    public function setOpeningHours(?OpeningHours $openingHours): void
    {
        $this->openingHours = $openingHours;
    }

    /**
     * Returns Distance.
     * The calculated distance (in meters) between the location specified and the address provided in the
     * request
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }

    /**
     * Sets Distance.
     * The calculated distance (in meters) between the location specified and the address provided in the
     * request
     *
     * @maps Distance
     */
    public function setDistance(?int $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * Returns Location Code.
     * The location identifier
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * Sets Location Code.
     * The location identifier
     *
     * @maps LocationCode
     */
    public function setLocationCode(?string $locationCode): void
    {
        $this->locationCode = $locationCode;
    }

    /**
     * Returns Partner ID.
     * The partner identifier; not used anymore
     */
    public function getPartnerID(): ?string
    {
        return $this->partnerID;
    }

    /**
     * Sets Partner ID.
     * The partner identifier; not used anymore
     *
     * @maps PartnerID
     */
    public function setPartnerID(?string $partnerID): void
    {
        $this->partnerID = $partnerID;
    }

    /**
     * Returns Sustainability.
     * Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/sustainability-codes) for possible values.
     */
    public function getSustainability(): ?Sustainability
    {
        return $this->sustainability;
    }

    /**
     * Sets Sustainability.
     * Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/sustainability-codes) for possible values.
     *
     * @maps Sustainability
     */
    public function setSustainability(?Sustainability $sustainability): void
    {
        $this->sustainability = $sustainability;
    }

    /**
     * Converts the CheckoutLocation object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutLocation object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutLocation',
            [
                'address' => $this->address,
                'pickupTime' => $this->pickupTime,
                'openingHours' => $this->openingHours,
                'distance' => $this->distance,
                'locationCode' => $this->locationCode,
                'partnerID' => $this->partnerID,
                'sustainability' => $this->sustainability
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
        if (isset($this->address)) {
            $json['Address']        = $this->address;
        }
        if (isset($this->pickupTime)) {
            $json['PickupTime']     = $this->pickupTime;
        }
        if (isset($this->openingHours)) {
            $json['OpeningHours']   = $this->openingHours;
        }
        if (isset($this->distance)) {
            $json['Distance']       = $this->distance;
        }
        if (isset($this->locationCode)) {
            $json['LocationCode']   = $this->locationCode;
        }
        if (isset($this->partnerID)) {
            $json['PartnerID']      = $this->partnerID;
        }
        if (isset($this->sustainability)) {
            $json['Sustainability'] = $this->sustainability;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

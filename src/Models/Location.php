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

class Location implements \JsonSerializable
{
    /**
     * @var LocationsAddress|null
     */
    private $address;

    /**
     * @var DeliveryOptions|null
     */
    private $deliveryOptions;

    /**
     * @var int|null
     */
    private $distance;

    /**
     * @var float|null
     */
    private $latitude;

    /**
     * @var int|null
     */
    private $locationCode;

    /**
     * @var float|null
     */
    private $longitude;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var LocationsOpeningHours|null
     */
    private $openingHours;

    /**
     * @var Sustainability|null
     */
    private $sustainability;

    /**
     * @var string|null
     */
    private $partnerName;

    /**
     * @var string|null
     */
    private $retailNetworkID;

    /**
     * Returns Address.
     */
    public function getAddress(): ?LocationsAddress
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps Address
     */
    public function setAddress(?LocationsAddress $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Delivery Options.
     * The options belonging to the pickup location. The delivery options RETA, UL, PU, DO, BW, RT and BWUL
     * can be shown in the response. Please ignore these codes. These codes are internal PostNL codes.
     */
    public function getDeliveryOptions(): ?DeliveryOptions
    {
        return $this->deliveryOptions;
    }

    /**
     * Sets Delivery Options.
     * The options belonging to the pickup location. The delivery options RETA, UL, PU, DO, BW, RT and BWUL
     * can be shown in the response. Please ignore these codes. These codes are internal PostNL codes.
     *
     * @maps DeliveryOptions
     */
    public function setDeliveryOptions(?DeliveryOptions $deliveryOptions): void
    {
        $this->deliveryOptions = $deliveryOptions;
    }

    /**
     * Returns Distance.
     * The distance from the address/coordinates provided in the request to the pickup location returned.
     * Distance in meters.
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }

    /**
     * Sets Distance.
     * The distance from the address/coordinates provided in the request to the pickup location returned.
     * Distance in meters.
     *
     * @maps Distance
     */
    public function setDistance(?int $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * Returns Latitude.
     * The latitude of the pickup location
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * Sets Latitude.
     * The latitude of the pickup location
     *
     * @maps Latitude
     */
    public function setLatitude(?float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns Location Code.
     * The pickup location identifier
     */
    public function getLocationCode(): ?int
    {
        return $this->locationCode;
    }

    /**
     * Sets Location Code.
     * The pickup location identifier
     *
     * @maps LocationCode
     */
    public function setLocationCode(?int $locationCode): void
    {
        $this->locationCode = $locationCode;
    }

    /**
     * Returns Longitude.
     * The longitude of the pickup location
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * Sets Longitude.
     * The longitude of the pickup location
     *
     * @maps Longitude
     */
    public function setLongitude(?float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * Returns Name.
     * The name of the pickup location
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the pickup location
     *
     * @maps Name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Opening Hours.
     * The standard opening times of the pickup location
     */
    public function getOpeningHours(): ?LocationsOpeningHours
    {
        return $this->openingHours;
    }

    /**
     * Sets Opening Hours.
     * The standard opening times of the pickup location
     *
     * @maps OpeningHours
     */
    public function setOpeningHours(?LocationsOpeningHours $openingHours): void
    {
        $this->openingHours = $openingHours;
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
     * Returns Partner Name.
     * The partner name belonging to the pickup location. Can be ignored, no longer used.
     */
    public function getPartnerName(): ?string
    {
        return $this->partnerName;
    }

    /**
     * Sets Partner Name.
     * The partner name belonging to the pickup location. Can be ignored, no longer used.
     *
     * @maps PartnerName
     */
    public function setPartnerName(?string $partnerName): void
    {
        $this->partnerName = $partnerName;
    }

    /**
     * Returns Retail Network ID.
     * The retail network belonging to the pickup location. Can be ignored, no longer used
     */
    public function getRetailNetworkID(): ?string
    {
        return $this->retailNetworkID;
    }

    /**
     * Sets Retail Network ID.
     * The retail network belonging to the pickup location. Can be ignored, no longer used
     *
     * @maps RetailNetworkID
     */
    public function setRetailNetworkID(?string $retailNetworkID): void
    {
        $this->retailNetworkID = $retailNetworkID;
    }

    /**
     * Converts the Location object to a human-readable string representation.
     *
     * @return string The string representation of the Location object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Location',
            [
                'address' => $this->address,
                'deliveryOptions' => $this->deliveryOptions,
                'distance' => $this->distance,
                'latitude' => $this->latitude,
                'locationCode' => $this->locationCode,
                'longitude' => $this->longitude,
                'name' => $this->name,
                'openingHours' => $this->openingHours,
                'sustainability' => $this->sustainability,
                'partnerName' => $this->partnerName,
                'retailNetworkID' => $this->retailNetworkID
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
            $json['Address']         = $this->address;
        }
        if (isset($this->deliveryOptions)) {
            $json['DeliveryOptions'] = $this->deliveryOptions;
        }
        if (isset($this->distance)) {
            $json['Distance']        = $this->distance;
        }
        if (isset($this->latitude)) {
            $json['Latitude']        = $this->latitude;
        }
        if (isset($this->locationCode)) {
            $json['LocationCode']    = $this->locationCode;
        }
        if (isset($this->longitude)) {
            $json['Longitude']       = $this->longitude;
        }
        if (isset($this->name)) {
            $json['Name']            = $this->name;
        }
        if (isset($this->openingHours)) {
            $json['OpeningHours']    = $this->openingHours;
        }
        if (isset($this->sustainability)) {
            $json['Sustainability']  = $this->sustainability;
        }
        if (isset($this->partnerName)) {
            $json['PartnerName']     = $this->partnerName;
        }
        if (isset($this->retailNetworkID)) {
            $json['RetailNetworkID'] = $this->retailNetworkID;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

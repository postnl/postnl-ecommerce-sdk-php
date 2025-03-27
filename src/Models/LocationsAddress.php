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

class LocationsAddress implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $countrycode;

    /**
     * @var int|null
     */
    private $houseNr;

    /**
     * @var string|null
     */
    private $houseNrExt;

    /**
     * @var string|null
     */
    private $remark;

    /**
     * @var string|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $zipcode;

    /**
     * Returns City.
     * The city of the pickup location address
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * The city of the pickup location address
     *
     * @maps City
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Countrycode.
     * The country of the pickup location address
     */
    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }

    /**
     * Sets Countrycode.
     * The country of the pickup location address
     *
     * @maps Countrycode
     */
    public function setCountrycode(?string $countrycode): void
    {
        $this->countrycode = $countrycode;
    }

    /**
     * Returns House Nr.
     * The house number of the pickup location address
     */
    public function getHouseNr(): ?int
    {
        return $this->houseNr;
    }

    /**
     * Sets House Nr.
     * The house number of the pickup location address
     *
     * @maps HouseNr
     */
    public function setHouseNr(?int $houseNr): void
    {
        $this->houseNr = $houseNr;
    }

    /**
     * Returns House Nr Ext.
     * The house number extension of the pickup location address
     */
    public function getHouseNrExt(): ?string
    {
        return $this->houseNrExt;
    }

    /**
     * Sets House Nr Ext.
     * The house number extension of the pickup location address
     *
     * @maps HouseNrExt
     */
    public function setHouseNrExt(?string $houseNrExt): void
    {
        $this->houseNrExt = $houseNrExt;
    }

    /**
     * Returns Remark.
     * Additional information about the pickup location
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * Sets Remark.
     * Additional information about the pickup location
     *
     * @maps Remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * Returns Street.
     * The street of the pickup location address
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Sets Street.
     * The street of the pickup location address
     *
     * @maps Street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * Returns Zipcode.
     * The zipcode of the pickup location address
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * Sets Zipcode.
     * The zipcode of the pickup location address
     *
     * @maps Zipcode
     */
    public function setZipcode(?string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Converts the LocationsAddress object to a human-readable string representation.
     *
     * @return string The string representation of the LocationsAddress object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LocationsAddress',
            [
                'city' => $this->city,
                'countrycode' => $this->countrycode,
                'houseNr' => $this->houseNr,
                'houseNrExt' => $this->houseNrExt,
                'remark' => $this->remark,
                'street' => $this->street,
                'zipcode' => $this->zipcode
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
            $json['City']        = $this->city;
        }
        if (isset($this->countrycode)) {
            $json['Countrycode'] = $this->countrycode;
        }
        if (isset($this->houseNr)) {
            $json['HouseNr']     = $this->houseNr;
        }
        if (isset($this->houseNrExt)) {
            $json['HouseNrExt']  = $this->houseNrExt;
        }
        if (isset($this->remark)) {
            $json['Remark']      = $this->remark;
        }
        if (isset($this->street)) {
            $json['Street']      = $this->street;
        }
        if (isset($this->zipcode)) {
            $json['Zipcode']     = $this->zipcode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

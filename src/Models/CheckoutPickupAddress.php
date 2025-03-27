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
 * The pickup location address
 */
class CheckoutPickupAddress implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $zipcode;

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
    private $countrycode;

    /**
     * @var string|null
     */
    private $companyName;

    /**
     * Returns Street.
     * The pickup location street
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Sets Street.
     * The pickup location street
     *
     * @maps Street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * Returns Zipcode.
     * The pickup location zipcode
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * Sets Zipcode.
     * The pickup location zipcode
     *
     * @maps Zipcode
     */
    public function setZipcode(?string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Returns House Nr.
     * The pickup location housenumber
     */
    public function getHouseNr(): ?int
    {
        return $this->houseNr;
    }

    /**
     * Sets House Nr.
     * The pickup location housenumber
     *
     * @maps HouseNr
     */
    public function setHouseNr(?int $houseNr): void
    {
        $this->houseNr = $houseNr;
    }

    /**
     * Returns House Nr Ext.
     * The pickup location housenumber extension
     */
    public function getHouseNrExt(): ?string
    {
        return $this->houseNrExt;
    }

    /**
     * Sets House Nr Ext.
     * The pickup location housenumber extension
     *
     * @maps HouseNrExt
     */
    public function setHouseNrExt(?string $houseNrExt): void
    {
        $this->houseNrExt = $houseNrExt;
    }

    /**
     * Returns Countrycode.
     * The pickup location country
     */
    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }

    /**
     * Sets Countrycode.
     * The pickup location country
     *
     * @maps Countrycode
     */
    public function setCountrycode(?string $countrycode): void
    {
        $this->countrycode = $countrycode;
    }

    /**
     * Returns Company Name.
     * The pickup location company name
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Sets Company Name.
     * The pickup location company name
     *
     * @maps CompanyName
     */
    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * Converts the CheckoutPickupAddress object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutPickupAddress object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutPickupAddress',
            [
                'street' => $this->street,
                'zipcode' => $this->zipcode,
                'houseNr' => $this->houseNr,
                'houseNrExt' => $this->houseNrExt,
                'countrycode' => $this->countrycode,
                'companyName' => $this->companyName
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
        if (isset($this->street)) {
            $json['Street']      = $this->street;
        }
        if (isset($this->zipcode)) {
            $json['Zipcode']     = $this->zipcode;
        }
        if (isset($this->houseNr)) {
            $json['HouseNr']     = $this->houseNr;
        }
        if (isset($this->houseNrExt)) {
            $json['HouseNrExt']  = $this->houseNrExt;
        }
        if (isset($this->countrycode)) {
            $json['Countrycode'] = $this->countrycode;
        }
        if (isset($this->companyName)) {
            $json['CompanyName'] = $this->companyName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

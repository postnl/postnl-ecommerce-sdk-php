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

class CheckoutAddress implements \JsonSerializable
{
    /**
     * @var string
     */
    private $addressType;

    /**
     * @var string|null
     */
    private $street;

    /**
     * @var int
     */
    private $houseNr;

    /**
     * @var string|null
     */
    private $houseNrExt;

    /**
     * @var string
     */
    private $zipcode;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string
     */
    private $countrycode;

    /**
     * @param string $addressType
     * @param int $houseNr
     * @param string $zipcode
     * @param string $countrycode
     */
    public function __construct(string $addressType, int $houseNr, string $zipcode, string $countrycode)
    {
        $this->addressType = $addressType;
        $this->houseNr = $houseNr;
        $this->zipcode = $zipcode;
        $this->countrycode = $countrycode;
    }

    /**
     * Returns Address Type.
     * Address type. 01 is for the receiver address, 02 is for the sender address.
     */
    public function getAddressType(): string
    {
        return $this->addressType;
    }

    /**
     * Sets Address Type.
     * Address type. 01 is for the receiver address, 02 is for the sender address.
     *
     * @required
     * @maps AddressType
     * @factory \PostnlEcommerceLib\Models\AddressTypeEnum::checkValue
     */
    public function setAddressType(string $addressType): void
    {
        $this->addressType = $addressType;
    }

    /**
     * Returns Street.
     * Street name; for Belgian addresses, it is strongly recommended to fill in the  street value
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Sets Street.
     * Street name; for Belgian addresses, it is strongly recommended to fill in the  street value
     *
     * @maps Street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * Returns House Nr.
     * The house number of the delivery address
     */
    public function getHouseNr(): int
    {
        return $this->houseNr;
    }

    /**
     * Sets House Nr.
     * The house number of the delivery address
     *
     * @required
     * @maps HouseNr
     */
    public function setHouseNr(int $houseNr): void
    {
        $this->houseNr = $houseNr;
    }

    /**
     * Returns House Nr Ext.
     * House number extension
     */
    public function getHouseNrExt(): ?string
    {
        return $this->houseNrExt;
    }

    /**
     * Sets House Nr Ext.
     * House number extension
     *
     * @maps HouseNrExt
     */
    public function setHouseNrExt(?string $houseNrExt): void
    {
        $this->houseNrExt = $houseNrExt;
    }

    /**
     * Returns Zipcode.
     * Zipcode of the address
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * Sets Zipcode.
     * Zipcode of the address
     *
     * @required
     * @maps Zipcode
     */
    public function setZipcode(string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Returns City.
     * City of the address
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * City of the address
     *
     * @maps City
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Countrycode.
     * ISO2 country code. Limited to NL and BE.
     */
    public function getCountrycode(): string
    {
        return $this->countrycode;
    }

    /**
     * Sets Countrycode.
     * ISO2 country code. Limited to NL and BE.
     *
     * @required
     * @maps Countrycode
     * @factory \PostnlEcommerceLib\Models\CountrycodeEnum::checkValue
     */
    public function setCountrycode(string $countrycode): void
    {
        $this->countrycode = $countrycode;
    }

    /**
     * Converts the CheckoutAddress object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutAddress object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutAddress',
            [
                'addressType' => $this->addressType,
                'street' => $this->street,
                'houseNr' => $this->houseNr,
                'houseNrExt' => $this->houseNrExt,
                'zipcode' => $this->zipcode,
                'city' => $this->city,
                'countrycode' => $this->countrycode
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
        $json['AddressType']    = AddressTypeEnum::checkValue($this->addressType);
        if (isset($this->street)) {
            $json['Street']     = $this->street;
        }
        $json['HouseNr']        = $this->houseNr;
        if (isset($this->houseNrExt)) {
            $json['HouseNrExt'] = $this->houseNrExt;
        }
        $json['Zipcode']        = $this->zipcode;
        if (isset($this->city)) {
            $json['City']       = $this->city;
        }
        $json['Countrycode']    = CountrycodeEnum::checkValue($this->countrycode);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

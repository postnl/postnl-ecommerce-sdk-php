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

class ShippingstatusAddress implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $companyName;

    /**
     * @var string|null
     */
    private $departmentName;

    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * @var string|null
     */
    private $zipcode;

    /**
     * @var string|null
     */
    private $region;

    /**
     * @var string|null
     */
    private $district;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $houseNumber;

    /**
     * @var string|null
     */
    private $houseNumberSuffix;

    /**
     * @var string|null
     */
    private $building;

    /**
     * @var string|null
     */
    private $floor;

    /**
     * @var string|null
     */
    private $remark;

    /**
     * Returns First Name.
     * The first name
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * The first name
     *
     * @maps FirstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * The last name
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * The last name
     *
     * @maps LastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Company Name.
     * The company name
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Sets Company Name.
     * The company name
     *
     * @maps CompanyName
     */
    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * Returns Department Name.
     * The department name
     */
    public function getDepartmentName(): ?string
    {
        return $this->departmentName;
    }

    /**
     * Sets Department Name.
     * The department name
     *
     * @maps DepartmentName
     */
    public function setDepartmentName(?string $departmentName): void
    {
        $this->departmentName = $departmentName;
    }

    /**
     * Returns Country Code.
     * The ISO2 country code
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * The ISO2 country code
     *
     * @maps CountryCode
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns Zipcode.
     * The zipcode
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * Sets Zipcode.
     * The zipcode
     *
     * @maps Zipcode
     */
    public function setZipcode(?string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Returns Region.
     * The region name
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * Sets Region.
     * The region name
     *
     * @maps Region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    /**
     * Returns District.
     * The district name
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * Sets District.
     * The district name
     *
     * @maps District
     */
    public function setDistrict(?string $district): void
    {
        $this->district = $district;
    }

    /**
     * Returns City.
     * The city name
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * The city name
     *
     * @maps City
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Street.
     * The street name
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Sets Street.
     * The street name
     *
     * @maps Street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * Returns House Number.
     * The house number
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * Sets House Number.
     * The house number
     *
     * @maps HouseNumber
     */
    public function setHouseNumber(?string $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * Returns House Number Suffix.
     * The house number suffix
     */
    public function getHouseNumberSuffix(): ?string
    {
        return $this->houseNumberSuffix;
    }

    /**
     * Sets House Number Suffix.
     * The house number suffix
     *
     * @maps HouseNumberSuffix
     */
    public function setHouseNumberSuffix(?string $houseNumberSuffix): void
    {
        $this->houseNumberSuffix = $houseNumberSuffix;
    }

    /**
     * Returns Building.
     * The building name
     */
    public function getBuilding(): ?string
    {
        return $this->building;
    }

    /**
     * Sets Building.
     * The building name
     *
     * @maps Building
     */
    public function setBuilding(?string $building): void
    {
        $this->building = $building;
    }

    /**
     * Returns Floor.
     * The floor of the building
     */
    public function getFloor(): ?string
    {
        return $this->floor;
    }

    /**
     * Sets Floor.
     * The floor of the building
     *
     * @maps Floor
     */
    public function setFloor(?string $floor): void
    {
        $this->floor = $floor;
    }

    /**
     * Returns Remark.
     * An additional remark
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * Sets Remark.
     * An additional remark
     *
     * @maps Remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * Converts the ShippingstatusAddress object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingstatusAddress object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ShippingstatusAddress',
            [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'companyName' => $this->companyName,
                'departmentName' => $this->departmentName,
                'countryCode' => $this->countryCode,
                'zipcode' => $this->zipcode,
                'region' => $this->region,
                'district' => $this->district,
                'city' => $this->city,
                'street' => $this->street,
                'houseNumber' => $this->houseNumber,
                'houseNumberSuffix' => $this->houseNumberSuffix,
                'building' => $this->building,
                'floor' => $this->floor,
                'remark' => $this->remark
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
        if (isset($this->firstName)) {
            $json['FirstName']         = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['LastName']          = $this->lastName;
        }
        if (isset($this->companyName)) {
            $json['CompanyName']       = $this->companyName;
        }
        if (isset($this->departmentName)) {
            $json['DepartmentName']    = $this->departmentName;
        }
        if (isset($this->countryCode)) {
            $json['CountryCode']       = $this->countryCode;
        }
        if (isset($this->zipcode)) {
            $json['Zipcode']           = $this->zipcode;
        }
        if (isset($this->region)) {
            $json['Region']            = $this->region;
        }
        if (isset($this->district)) {
            $json['District']          = $this->district;
        }
        if (isset($this->city)) {
            $json['City']              = $this->city;
        }
        if (isset($this->street)) {
            $json['Street']            = $this->street;
        }
        if (isset($this->houseNumber)) {
            $json['HouseNumber']       = $this->houseNumber;
        }
        if (isset($this->houseNumberSuffix)) {
            $json['HouseNumberSuffix'] = $this->houseNumberSuffix;
        }
        if (isset($this->building)) {
            $json['Building']          = $this->building;
        }
        if (isset($this->floor)) {
            $json['Floor']             = $this->floor;
        }
        if (isset($this->remark)) {
            $json['Remark']            = $this->remark;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
